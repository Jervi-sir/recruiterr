<div class="container">
    <section class="step-indicator">
        <div class="step step1 completed">
            <div class="step-icon"><i class="icofont-check"></i></div>
          <p><span>joined</span></p>
        </div>
      <div class="indicator-line completed"></div>
      <div class="step step2 active">
          <div class="step-icon active">2</div>
        <p><span>Complete</span><span>your profile</span></p>
      </div>
      <div class="indicator-line"></div>
      <div class="step step3">
          <div class="step-icon">3</div>
        <p>Confirmation</p>
      </div>
    </section>
</div>


<style>
.step-indicator {
  display: flex;
  align-items: center;
  padding: 0 40px;
  margin-top: 1rem;
}

.step {
  display: flex;
  align-items: center;
  flex-direction: column;
  position: relative;
  z-index: 1;
}

.step-indicator .step-icon {
  height: 50px;
  width: 50px;
  border-radius: 50%;
  background: #c2c2c2;
  font-size: 10px;
  text-align: center;
  color: #ffffff;
  position: relative;
  line-height: 50px;
  font-size: 20px;
}

.step.active .step-icon {
  background: crimson;
}

.step.completed .step-icon {
  background: rgb(25, 205, 23);
}

.step p span:nth-of-type(2) {
    line-height: 0;
}

.step p {

}

.step p {
  text-align: center;
  /*position: absolute;*/
  bottom: -40px;
  color: #c2c2c2;
  font-size: 14px;
  font-weight: bold;
  display: flex;
  flex-direction: column;
}

.step.active p {
  color: crimson;
}

.step.completed p {
  color: rgb(25, 205, 23);
}

.step.step2 p,
.step.step3 p {
  left: 50%;
  /*transform: translateX(-50%);*/
}

.indicator-line {
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, rgba(220,20,60,1) 26%, rgba(220,20,60,0.7331786542923434) 37%, rgba(194,194,194,1) 50%);
  flex: 1;
  transform: translateY(-1.1rem);
}

.indicator-line.active {
  background: crimson;
}

.indicator-line.completed {
  background: rgb(25, 205, 23);
}


@media screen and (max-width: 500px) {
  .step p {
    font-size: 11px;
    bottom: -20px;
  }
}
</style>
