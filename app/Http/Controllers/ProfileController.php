<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProfileController extends Controller
{
    /*--------------GET PAGE ------------------*/

    /* ----- get complete profile page ----*/
    public function completeProfile()
    {
        if(Auth()->user()->isVerified != 0) {
            return redirect()->route('profile.editMine');
        }

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
            'profile_pic' => $profile->profile_pic,

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

        return view('simplest.user.completeProfile', ['skills' => json_encode($data['skills']),
                                     'specialities' => json_encode($data['specialities']),
                                     'profile' => json_encode($data['profile'])
                                    ]);
    }

    /* ----- get my profile page ----*/
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

            'profile_pic' => $profile->profile_pic,
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

    /* ----- get edit my profile page ----*/
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

            'profile_pic' => $profile->profile_pic,
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

    /*--------------STORES ------------------*/
    /* ----- update my profile page ----*/
    public function updateMyProfile(Request $request)
    {
        $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [ "quality" => "50"])->getSecurePath();

        //Tags to json array
        $skills = $this->requestedSkillsToJson($request->tags);
        //get skill names array
        $skills_name_array = $this->skillsName($skills);
        //add new tag if not existing
        $skills = $this->addNewSkills($skills);
        //getLanguages levels
        $languages = $this->getLanguageLevels($request->level_english, $request->level_french, $request->level_arabic);

        //getUser and his profile
        $user = Auth()->user();
        $profile = $user->profile;

        //save Profile side
        $profile->first_name = $request->first_name;
        $profile->family_name = $request->last_name;
        $profile->birthday = $request->birth_date;
        $profile->bio = $request->bio;
        $profile->languages = $languages;
        $profile->skills = $skills_name_array;
        $profile->profile_pic = $uploadedFileUrl;
        $profile->save();

        //save User side
        $user->mobile = $request->phone_number;
        $user->code = $request->student_code;
        $user->save();

        //attach skills rls
        $user->skills()->detach();
        foreach ($skills as $key => $skill) {
            $skill_id = $skill->id;
            $user->skills()->attach($skill_id);
        }

        return redirect()->route('profile.mine');
    }

    /* ----- finish completing my profile page ----*/
    public function finishCompleteProfile(Request $request)
    {

        $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [ "quality" => "50"])->getSecurePath();

        //Tags to json array
        $skills = $this->requestedSkillsToJson($request->tags);
        //get skill names array
        $skills_name_array = $this->skillsName($skills);
        //add new tag if not existing
        $skills = $this->addNewSkills($skills);
        //getLanguages levels
        $languages = $this->getLanguageLevels($request->level_english, $request->level_french, $request->level_arabic);

        //getUser and his profile
        $user = Auth()->user();
        $profile = $user->profile;

        //save Profile side
        $profile->first_name = $request->first_name;
        $profile->family_name = $request->last_name;
        $profile->birthday = $request->birth_date;
        $profile->entp_help = $request->entp_help;
        $profile->bio = $request->bio;
        $profile->languages = $languages;
        $profile->skills = $skills_name_array;
        $profile->profile_pic = $uploadedFileUrl;
        $profile->save();

        //save User side
        $user->mobile = $request->phone_number;
        $user->code = $request->student_code;
        $user->isVerified = 2;              //with no email verification
        $user->save();

        //attach skills rls
        $user->skills()->detach();
        foreach ($skills as $key => $skill) {
            $skill_id = $skill->id;
            $user->skills()->attach($skill_id);
        }

        return redirect()->route('home');
    }

    /*---------------------------
            HELPERS
            ---------------------*/

    //get array of each index with a fake json string into a true json array
    private function requestedSkillsToJson($input) {
        $tags = [];
        foreach ($input as $key => $skill) {
            array_push($tags, json_decode($skill));
        }
        return $tags;
    }

    //return a string of name from json array
    private function skillsName($input) {
        $skills_name_array = [];
        foreach ($input as $key => $skill) {
            array_push($skills_name_array, $skill->name);
        }
        return implode(", ", $skills_name_array);
    }

    //add new skill if it doesnt exist in database
    private function addNewSkills($input) {
        foreach ($input as $key => $skill) {
            if($skill->id == '') {
                $add_skill = new Skill();
                $add_skill->name = $skill->name;
                $add_skill->save();
                $input[$key]->id = $add_skill->id;
            }
        }

        return $input;
    }

    //get language encoded json
    private function getLanguageLevels($english, $french, $arabic) {
        $languages = [
            'english' => $english,
            'french' => $french,
            'arabic' => $arabic,
        ];

        return json_encode($languages);
    }


}
