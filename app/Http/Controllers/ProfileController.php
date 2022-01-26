<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function completeProfile()
    {
        $skills = Skill::all();
        $specialities = Speciality::all();
        $user = Auth()->user();
        $profile = $user->profile;

        $data['profile'] = [
            'grade' => $profile->speciality_id,
            'firstName' => $profile->first_name,
            'familyName' => $profile->family_name,
            'birthdate' => $profile->birthday,
            'bio' => $profile->bio,

            'email' => $user->email,
            'code' => $user->code,
            'phone' => $user->mobile,
        ];

        foreach ($skills as $key => $skill) {
            $data['skills'][$key] = [
                'id' => $skill->id,
                'name' => $skill->name,
            ];
        }

        foreach ($specialities as $key => $speciality) {
            $data['specialities'][$key] = [
                'id' => $speciality->id,
                'name' => $speciality->name,
            ];
        }

        //$data_obj = (object)$data['specialities'];

        return view('user.completeProfile', ['skills' => json_encode($data['skills']),
                                     'specialities' => json_encode($data['specialities']),
                                     'profile' => json_encode($data['profile'])
                                    ]);
    }

    public function profileUpdate(Request $request)
    {
        $skills_name_array = [];
        foreach ($request->tags as $key => $skill) {
            array_push($skills_name_array, json_decode($skill)->name);
        }

        $user = Auth()->user();
        $profile = $user->profile;

        $languages = [
            'english' => $request->level_english,
            'french' => $request->level_french,
            'arabic' => $request->level_arabic,
        ];

        $profile->first_name = $request->first_name;
        $profile->family_name = $request->last_name;
        $profile->birthday = $request->birth_date;
        $profile->entp_help = $request->entp_help;
        $profile->bio = $request->bio;
        $profile->languages = json_encode($languages);
        $profile->skills = implode(", ", $skills_name_array);

        $profile->save();


        $user->mobile = $request->phone_number;
        $user->code = $request->student_code;
        $user->isVerified = 2;              //with no email verification
        $user->save();

        //attach skills rls
        $user->skills()->detach();

        foreach ($request->tags as $key => $skill) {
            $skill_id = json_decode($skill)->id;
            $user->skills()->attach($skill_id);
        }

        return redirect()->route('home');
    }

    public function myProfile() {

        $user = Auth()->user();
        $profile = $user->profile;
        foreach ($user->skills as $key => $skill) {
            $data['userSkills'][$key] = [
                'id' => $skill->id,
                'name' => $skill->name,
            ];
        }
        $languages = json_decode($profile->languages);
        $data['profile'] = [
            'username' => $user->name,
            'email' => $user->email,
            'code' => $user->code,
            'phone' => $user->mobile,
            'joined_at' => $user->created_at->format('M d, Y'),

            'familyName' => $profile->first_name,
            'firstName' => $profile->family_name,
            'birthdate' => date('M d, Y', strtotime($profile->birthday)),
            'entp_help' => $profile->entp_help,
            'bio' => $profile->bio,
            'grade' => $profile->speciality_id,
            'language' => [
                'english' => $languages->english,
                'french' => $languages->french,
                'arabic' => $languages->arabic,
            ]
        ];


        return view('user.myProfile', ['userSkills' => json_encode($data['userSkills']),
                                        'profile' => json_encode($data['profile'])
                                     ]);

    }

    public function editMyProfile() {
        $user = Auth()->user();
        $profile = $user->profile;

        foreach ($user->skills as $key => $skill) {
            $data['userSkills'][$key] = [
                'id' => $skill->id,
                'name' => $skill->name,
            ];
        }

        $languages = json_decode($profile->languages);

        $data['profile'] = [
            'username' => $user->name,
            'email' => $user->email,
            'code' => $user->code,
            'phone' => $user->mobile,

            'familyName' => $profile->first_name,
            'firstName' => $profile->family_name,
            'birthdate' => $profile->birthday,
            'entp_help' => $profile->entp_help,
            'bio' => $profile->bio,
            'grade' => $profile->speciality_id,
            'language' => [
                'english' => $languages->english,
                'french' => $languages->french,
                'arabic' => $languages->arabic,
            ]
        ];

        $skills = Skill::all();
        foreach ($skills as $key => $skill) {
            $data['skills'][$key] = [
                'id' => $skill->id,
                'name' => $skill->name,
            ];
        }

        return view('user.editProfile', ['userSkills' => json_encode($data['userSkills']),
                                        'skills' => json_encode($data['skills']),
                                        'profile' => json_encode($data['profile'])
                                     ]);

    }

    public function updateMyProfile(Request $request)
    {
        $skills_name_array = [];
        foreach ($request->tags as $key => $skill) {
            array_push($skills_name_array, json_decode($skill)->name);
        }

        $user = Auth()->user();
        $profile = $user->profile;

        $languages = [
            'english' => $request->level_english,
            'french' => $request->level_french,
            'arabic' => $request->level_arabic,
        ];

        $profile->first_name = $request->first_name;
        $profile->family_name = $request->last_name;
        $profile->birthday = $request->birth_date;
        $profile->bio = $request->bio;
        $profile->languages = json_encode($languages);
        $profile->skills = implode(", ", $skills_name_array);
        $profile->save();


        $user->mobile = $request->phone_number;
        $user->code = $request->student_code;
        $user->save();

        //attach skills rls
        $user->skills()->detach();

        foreach ($request->tags as $key => $skill) {
            $skill_id = json_decode($skill)->id;
            $user->skills()->attach($skill_id);
        }

        return redirect()->route('profile.mine');
    }
}
