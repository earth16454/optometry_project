<div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
  <div class="card-body">
    <!-- Card with an image on left -->
    <div align="center">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-12">
            <div class="card-body">
              <img src="assets/img/logo1.png" class="img-fluid rounded-start" alt="..." width="300px" />
              <h5 class="card-title">
                Department of Optometry, Faculty of Allied Health
                Science
              </h5>
              <p class="card-text">
                Naresuan University, Tel, +66(0)55966285
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card with an image on left -->
    </div>

    <!-- General Form Elements -->

    <div class="row mb-3">
      <label for="inputText" class="col-sm-12 col-form-label"><b>Visual Assessment Record (Patient's case history)</b></label>
      <hr />
    </div>
    <div class="row mb-3 g-3">
      <div class="col-12 col-md-6">
        <label for="pi_fname" class="form-label">First Name :</label>
        <input type="text" name="pi_fname" id="pi_fname" class="form-control" />
      </div>
      <div class="col-12 col-md-6">
        <label for="pi_lname" class="form-label">Last Name :</label>
        <input type="text" name="pi_lname" id="pi_lname" class="form-control" />
      </div>
      <div class="col-12 col-md-6">
        <label for="pi_birth" class="form-label">Date of Birth</label>
        <input type="date" name="pi_birth" id="pi_birth" class="form-control" />
      </div>

      <div class="col-12 col-md-6">
        <label for="pi_gender" class="form-label me-2">Gender :</label><br />
        <div class="form-check form-check-inline">
          <input type="radio" name="pi_gender" id="male" class="form-check-input" />
          <label for="male" class="form-check-label">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" name="pi_gender" id="female" class="form-check-input" />
          <label for="female" class="form-check-label">Female</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" name="pi_gender" id="other" class="form-check-input" />
          <label for="other" class="form-check-label">N/A</label>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <label for="pi_tel" class="form-label">Tel :</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bx bxs-phone"></i></span>
          <input type="text" class="form-control" name="pi_tel" id="pi_tel" placeholder="0999999999" />
        </div>
      </div>
      <div class="col-12 col-md-6">
        <label for="pi_occupation" class="form-label">Occupation :</label>
        <div class="input-group mb-3">
          <input type="text" name="pi_occupation" id="pi_occupation" class="form-control" />
        </div>
      </div>

      <div class="col-12">
        <label for="pi_address" class="form-label">Address :</label>
        <div class="col-sm-12">
          <textarea rows="3" name="pi_address" id="pi_address" class="form-control"></textarea>
        </div>
      </div>


    </div>

    <hr class="my-4">

    <div class="row mb-3">
      <label for="cc_text" class="form-label">Chief Complaint :</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="cc_text" id="cc_text"></textarea>
      </div>
      <div class="col-sm-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="cc_symptoms" id="cc_symptoms1" value="long" />
          <label class="form-check-label" for="cc_symptoms1">มีอาการมัวระยะไกล</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="cc_symptoms" id="cc_symptoms2" value="near" />
          <label class="form-check-label" for="cc_symptoms2">มีอาการมัวระยะใกล้</label>
        </div>
      </div>
    </div>

    <hr class="my-4" />

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="POHx_checked" class="form-label">POHx : ตรวจตาครั้งล่าสุดเมื่อ</label>
        <div class="input-group mb-3">
          <input type="date" name="POHx_checked" id="POHx_checked" class="form-control" />
        </div>
      </div>
      <div class="col-md-6">
        <label for="POHx_reason" class="form-label">สาเหตุที่เข้ารับการตรวจ :</label>
        <div class="input-group mb-3">
          <input type="text" name="POHx_reason" id="POHx_reason" class="form-control" />
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="POHx_inspector" class="form-label">ผู้ตรวจ :</label>
        <div class="input-group mb-3">
          <input type="text" name="POHx_inspector" id="POHx_inspector" class="form-control" />
        </div>
      </div>
      <div class="col-md-4">
        <label for="POHx_site" class="form-label">สถานที่ตรวจ :</label>
        <div class="input-group mb-3">
          <input type="text" name="POHx_site" id="POHx_site" class="form-control" />
        </div>
      </div>
      <div class="col-md-4">
        <p class="">ยาขยายม่านตา :</p>
        <input type="radio" name="POHx_mydriatic" id="POHx_mydriatic1" class="form-check-input" />
        <label for="POHx_mydriatic1" class="form-check-label">ใช้ &nbsp;</label>
        <input type="radio" name="POHx_mydriatic" id="POHx_mydriatic2" class="form-check-input" />
        <label for="POHx_mydriatic2" class="form-check-label"> ไม่ใช้ </label>
      </div>
    </div>
    <div class="row mb-3">
      <label for="POHx_results" class="col-sm-3 col-form-label">ผลการตรวจ :</label>
      <div class="col-sm-9">
        <input type="text" name="POHx_results" id="POHx_results" class="form-control" />
      </div>
    </div>
    <div class="row mb-3">
      <label for="POHx_edited" class="col-sm-3 col-form-label">ได้รับการแก้ไขโดย :</label>
      <div class="col-sm-9">
        <input type="text" name="POHx_edited" id="POHx_edited" class="form-control" />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="POHx_radio" id="POHx_radio1" onchange="toggleInput(this)" />
        <label class="form-check-label" for="POHx_radio1"> Glasses : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input type="text" class="form-control" name="POHx_radio_detail" id="input1" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="POHx_radio" id="POHx_radio2" onchange="toggleInput(this)" />
        <label class="form-check-label" for="POHx_radio2">
          Contact lens :
        </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input type="text" class="form-control" name="POHx_radio_detail" id="input2" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="POHx_radio" id="POHx_radio3" onchange="toggleInput(this)" />
        <label class="form-check-label" for="POHx_radio3"> Surgery : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input type="text" class="form-control" name="POHx_radio_detail" id="input3" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="POHx_radio" id="POHx_radio4" onchange="toggleInput(this)" />
        <label class="form-check-label" for="POHx_radio4"> Trauma : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input type="text" class="form-control" name="POHx_radio_detail" id="input4" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="POHx_radio" id="POHx_radio5" onchange="toggleInput(this)" />
        <label class="form-check-label" for="POHx_radio5">
          Infection :
        </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input type="text" class="form-control" name="POHx_radio_detail" id="input5" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="POHx_radio" id="POHx_radio6" onchange="toggleInput(this)" />
        <label class="form-check-label" for="POHx_radio6">
          Visual Training :
        </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input type="text" class="form-control" name="POHx_radio_detail" id="input6" disabled />
      </div>
    </div>
    <hr />
    <div class="row mb-3">
      <label for="inputText" class="col-sm-12 col-form-label"><b>HA & Diplopia Hx :</b></label>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="ha_radio" id="radio7" onchange="toggleInput2(this)" />
        <label class="form-check-label" for="radio7"> HA : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input type="text" class="form-control" name="ha_radio_detail" id="input7" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="ha_radio" id="radio8" onchange="toggleInput2(this)" />
        <label class="form-check-label" for="radio8">
          Diplopia :
        </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input type="text" class="form-control" name="ha_radio_detail" id="input8" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="ha_radio" id="radio9" onchange="toggleInput2(this)" />
        <label class="form-check-label" for="radio9"> Flash : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input type="text" class="form-control" name="ha_radio_detail" id="input9" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="ha_radio" id="radio10" onchange="toggleInput2(this)" />
        <label class="form-check-label" for="radio10"> Floater : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input type="text" class="form-control" name="ha_radio_detail" id="input10" disabled />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input class="form-check-input" type="radio" name="ha_radio" id="radio11" onchange="toggleInput2(this)" />
        <label class="form-check-label" for="radio11"> Halos : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input type="text" class="form-control" name="ha_radio_detail" id="input11" disabled />
      </div>
    </div>
    <hr class="my-4" />

    <!-- End General Form Elements -->
  </div>
</div>