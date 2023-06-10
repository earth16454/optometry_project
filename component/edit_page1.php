<?php

require_once ('get_edit.php');

?>

<div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
  <div class="card-body">
    <!-- Card with an image on left -->
    <div align="center">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-12">
            <div class="card-body">
              <img src="assets/img/logo1.png" class="img-fluid rounded-start" alt="..." width="300px" />
              <h5 class="card-title">Department of Optometry, Faculty of Allied Health Science</h5>
              <p class="card-text">Naresuan University, Tel, +66(0)55966285</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card with an image on left -->
    </div>

    <!-- General Form Elements -->

    <div class="row mb-3">
      <label for="inputText" class="col-sm-12 col-form-label"
        ><b>Visual Assessment Record (Patient's case history)</b></label
      >
      <hr />
    </div>
    <div class="row mb-3 g-3">
      <div class="col-12 col-md-6">
        <!-- ส่งค่า pi_id -->
        <input type="hidden" name="pi_id" value="<?php echo $pi_id; ?>" />

        <label for="pi_fname" class="form-label">First Name :</label>
        <input
          type="text"
          name="pi_fname"
          id="pi_fname"
          value="<?php echo $pi_firstname; ?>"
          class="form-control"
          required
        />
        <div class="invalid-feedback">Please complete the information.</div>
      </div>
      <div class="col-12 col-md-6">
        <label for="pi_lname" class="form-label">Last Name :</label>
        <input
          type="text"
          name="pi_lname"
          id="pi_lname"
          class="form-control"
          value="<?php echo $pi_lastname; ?>"
          required
        />
        <div class="invalid-feedback">Please complete the information.</div>
      </div>
      <div class="col-12 col-md-6">
        <label for="pi_birth" class="form-label">Date of Birth</label>
        <input
          type="date"
          name="pi_birth"
          id="pi_birth"
          class="form-control"
          value="<?php echo $pi_birthdate; ?>"
          required
        />
      </div>

      <div class="col-12 col-md-6">
        <label for="pi_gender" class="form-label me-2">Gender :</label><br />
        <div class="form-check form-check-inline">
          <input type="radio" name="pi_gender" id="male" class="form-check-input" value="male" <?php echo ($pi_gender == 'male' ? 'checked' : '') ?> required />
          <label for="male" class="form-check-label">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" name="pi_gender" id="female" class="form-check-input" value="female" <?php echo ($pi_gender == 'female' ? 'checked' : ''); ?> />
          <label for="female" class="form-check-label">Female</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" name="pi_gender" id="other" class="form-check-input" value="LGBTQ+" <?php echo ($pi_gender == 'LGBTQ+' ? 'checked' : ''); ?> />
          <label for="other" class="form-check-label">N/A</label>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <label for="pi_tel" class="form-label">Tel :</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="bx bxs-phone"></i></span>
          <input
            type="text"
            class="form-control"
            name="pi_tel"
            id="pi_tel"
            maxlength="10"
            value="<?php echo $pi_tel; ?>"
            placeholder="0999999999"
            required
          />
        </div>
      </div>
      <div class="col-12 col-md-6">
        <label for="pi_occupation" class="form-label">Occupation :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="pi_occupation"
            id="pi_occupation"
            class="form-control"
            value="<?php echo $pi_occupation; ?>"
            required
          />
        </div>
      </div>

      <div class="col-12">
        <label for="pi_address" class="form-label">Address :</label>
        <div class="col-sm-12">
          <textarea rows="3" name="pi_address" id="pi_address" class="form-control" required>
<?php echo $pi_address; ?></textarea
          >
        </div>
      </div>
    </div>

    <hr class="my-4" />

    <div class="row mb-3">
      <label for="cc_text" class="form-label">Chief Complaint :</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="cc_text" id="cc_text" required><?php echo $cc_text; ?></textarea>
      </div>
      <div class="col-sm-3">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="cc_symptoms"
            id="cc_symptoms1"
            value="มีอาการมัวระยะไกล"
            <?php echo ($cc_symptoms == 'มีอาการมัวระยะไกล' ? 'checked' : ''); ?>
            required
          />
          <label class="form-check-label" for="cc_symptoms1">มีอาการมัวระยะไกล</label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="cc_symptoms"
            id="cc_symptoms2"
            value="มีอาการมัวระยะใกล้"
            <?php echo ($cc_symptoms == 'มีอาการมัวระยะใกล้' ? 'checked' : ''); ?>
          />
          <label class="form-check-label" for="cc_symptoms2">มีอาการมัวระยะใกล้</label>
        </div>
      </div>
    </div>

    <hr class="my-4" />

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="POHx_checked" class="form-label">POHx : ตรวจตาครั้งล่าสุดเมื่อ</label>
        <div class="input-group mb-3">
          <input
            type="date"
            name="POHx_checked"
            id="POHx_checked"
            class="form-control"
            value="<?php echo $POHx_checked; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-6">
        <label for="POHx_reason" class="form-label">สาเหตุที่เข้ารับการตรวจ :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="POHx_reason"
            id="POHx_reason"
            class="form-control"
            value="<?php echo $POHx_reason; ?>"
            required
          />
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="POHx_inspector" class="form-label">ผู้ตรวจ :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="POHx_inspector"
            id="POHx_inspector"
            class="form-control"
            value="<?php echo $POHx_inspector; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-4">
        <label for="POHx_site" class="form-label">สถานที่ตรวจ :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="POHx_site"
            id="POHx_site"
            class="form-control"
            value="<?php echo $POHx_site; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-4">
        <p class="">ยาขยายม่านตา :</p>
        <input type="radio" name="POHx_mydriatic" id="POHx_mydriatic1" class="form-check-input" value="yes" <?php echo ($POHx_mydriatic == 'yes' ? 'checked' : ''); ?> required />
        <label for="POHx_mydriatic1" class="form-check-label">ใช้ &nbsp;</label>
        <input type="radio" name="POHx_mydriatic" id="POHx_mydriatic2" class="form-check-input" value="no" <?php echo ($POHx_mydriatic == 'no' ? 'checked' : ''); ?> />
        <label for="POHx_mydriatic2" class="form-check-label"> ไม่ใช้ </label>
      </div>
    </div>
    <div class="row mb-3">
      <label for="POHx_results" class="col-sm-3 col-form-label">ผลการตรวจ :</label>
      <div class="col-sm-9">
        <input
          type="text"
          name="POHx_results"
          id="POHx_results"
          class="form-control"
          value="<?php echo $POHx_results; ?>"
          required
        />
      </div>
    </div>
    <div class="row mb-3">
      <label for="POHx_edited" class="col-sm-3 col-form-label">ได้รับการแก้ไขโดย :</label>
      <div class="col-sm-9">
        <input
          type="text"
          name="POHx_edited"
          id="POHx_edited"
          class="form-control"
          value="<?php echo $POHx_edited; ?>"
          required
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="POHx_radio"
          id="POHx_radio1"
          onchange="toggleInput(this)"
          value="Glasses"
          <?php echo ($POHx_radio == 'Glasses' ? 'checked' : ''); ?>
          required
        />
        <label class="form-check-label" for="POHx_radio1"> Glasses : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input 
          type="text" 
          class="form-control" 
          name="POHx_radio_detail" 
          id="input1" 
          <?php echo ($POHx_radio != 'Glasses' ? "disabled" : ''); ?> 
          <?php echo ($POHx_radio == 'Glasses' ? "value='$POHx_radio_detail'" : ''); ?> 
          required 
          
          />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="POHx_radio"
          id="POHx_radio2"
          onchange="toggleInput(this)"
          value="Contact lens"
          <?php echo ($POHx_radio == 'Contact lens' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="POHx_radio2"> Contact lens : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input 
          type="text" 
          class="form-control" 
          name="POHx_radio_detail" 
          id="input2" 
          <?php echo ($POHx_radio != 'Contact lens' ? 'disabled' : ''); ?> 
          <?php echo ($POHx_radio == 'Contact lens' ? "value='$POHx_radio_detail'" : ''); ?> 
          required 
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="POHx_radio"
          id="POHx_radio3"
          onchange="toggleInput(this)"
          value="Surgery"
          <?php echo ($POHx_radio == 'Surgery' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="POHx_radio3"> Surgery : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input 
          type="text" 
          class="form-control" 
          name="POHx_radio_detail" 
          id="input3" 
          <?php echo ($POHx_radio != 'Surgery' ? 'disabled' : ''); ?> 
          <?php echo ($POHx_radio == 'Surgery' ? "value='$POHx_radio_detail'" : ''); ?> 
          required 
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="POHx_radio"
          id="POHx_radio4"
          onchange="toggleInput(this)"
          value="Trauma"
          <?php echo ($POHx_radio == 'Trauma' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="POHx_radio4"> Trauma : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input 
          type="text" 
          class="form-control" 
          name="POHx_radio_detail" 
          id="input4" 
          <?php echo ($POHx_radio != 'Trauma' ? 'disabled' : ''); ?> 
          <?php echo ($POHx_radio == 'Trauma' ? "value='$POHx_radio_detail'" : ''); ?> 
          required 
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="POHx_radio"
          id="POHx_radio5"
          onchange="toggleInput(this)"
          value="Infection"
          <?php echo ($POHx_radio == 'Infection' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="POHx_radio5"> Infection : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input 
          type="text" 
          class="form-control" 
          name="POHx_radio_detail" 
          id="input5" 
          <?php echo ($POHx_radio != 'Infection' ? 'disabled' : ''); ?> 
          <?php echo ($POHx_radio == 'Infection' ? "value='$POHx_radio_detail'" : ''); ?> 
          required 
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="POHx_radio"
          id="POHx_radio6"
          onchange="toggleInput(this)"
          value="Visual Training"
          <?php echo ($POHx_radio == 'Visual Training' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="POHx_radio6"> Visual Training : </label>
      </div>
      <div class="col-sm-9" id="radioGroup">
        <input type="text" class="form-control" name="POHx_radio_detail" id="input6" 
        <?php echo ($POHx_radio != 'Visual Training' ? 'disabled' : ''); ?>
        <?php echo ($POHx_radio == 'Visual Training' ? "value='$POHx_radio_detail'" : ''); ?>
        required 
      />
      </div>
    </div>
    <hr />
    <div class="row mb-3">
      <label for="inputText" class="col-sm-12 col-form-label"><b>HA & Diplopia Hx :</b></label>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="ha_radio"
          id="radio7"
          onchange="toggleInput2(this)"
          value="HA"
          <?php echo ($ha_radio == 'HA' ? 'checked' : ''); ?>
          required
        />
        <label class="form-check-label" for="radio7"> HA : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input 
          type="text" 
          class="form-control" 
          name="ha_radio_detail" 
          id="input7"
          <?php echo ($ha_radio != 'HA' ? 'disabled' : ''); ?>
          <?php echo ($ha_radio == 'HA' ? "value='$ha_radio_detail'" : ''); ?>
          required
         />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="ha_radio"
          id="radio8"
          onchange="toggleInput2(this)"
          value="Diplopia"
          <?php echo ($ha_radio == 'Diplopia' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="radio8"> Diplopia : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input 
          type="text" 
          class="form-control" 
          name="ha_radio_detail" 
          id="input8" 
          <?php echo ($ha_radio != 'Diplopia' ? 'disabled' : ''); ?>
          <?php echo ($ha_radio == 'Diplopia' ? "value='$ha_radio_detail'" : ''); ?>
          required 
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="ha_radio"
          id="radio9"
          onchange="toggleInput2(this)"
          value="Flash"
          <?php echo ($ha_radio == 'Flash' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="radio9"> Flash : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input 
          type="text" 
          class="form-control" 
          name="ha_radio_detail" 
          id="input9" 
          <?php echo ($ha_radio != 'Flash' ? 'disabled' : ''); ?>
          <?php echo ($ha_radio == 'Flash' ? "value='$ha_radio_detail'" : ''); ?>
          required 
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="ha_radio"
          id="radio10"
          onchange="toggleInput2(this)"
          value="Floater"
          <?php echo ($ha_radio == 'Floater' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="radio10"> Floater : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input 
          type="text" 
          class="form-control" 
          name="ha_radio_detail" 
          id="input10" 
          <?php echo ($ha_radio != 'Floater' ? 'disabled' : ''); ?>
          <?php echo ($ha_radio == 'Floater' ? "value='$ha_radio_detail'" : ''); ?> 
          required 
        />
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">
        <input
          class="form-check-input"
          type="radio"
          name="ha_radio"
          id="radio11"
          onchange="toggleInput2(this)"
          value="Halos"
          <?php echo ($ha_radio == 'Halos' ? 'checked' : ''); ?>
        />
        <label class="form-check-label" for="radio11"> Halos : </label>
      </div>
      <div class="col-sm-9" id="radioGroup2">
        <input 
          type="text" 
          class="form-control" 
          name="ha_radio_detail" 
          id="input11" 
          <?php echo ($ha_radio != 'Halos' ? 'disabled' : ''); ?>
          <?php echo ($ha_radio == 'Halos' ? "value='$ha_radio_detail'" : ''); ?> 
          required
        />
      </div>
    </div>
    <hr class="my-4" />
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="PMHx_checked" class="form-label">PMHx : ตรวจสุขภาพครั้งล่าสุดเมื่อ</label>
        <div class="input-group mb-3">
          <input
            type="date"
            name="PMHx_checked"
            id="PMHx_checked"
            class="form-control"
            value="<?php echo $PMHx_checked; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-6">
        <label for="PMHx_reason" class="form-label">สาเหตุที่เข้ารับการตรวจ :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="PMHx_reason"
            id="PMHx_reason"
            class="form-control"
            value="<?php echo $PMHx_reason; ?>"
            required
          />
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="PMHx_inspector" class="form-label">ผู้ตรวจ :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="PMHx_inspector"
            id="PMHx_inspector"
            class="form-control"
            value="<?php echo $PMHx_inspector; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-6">
        <label for="PMHx_site" class="form-label">สถานที่ตรวจ :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="PMHx_site"
            id="PMHx_site"
            class="form-control"
            value="<?php echo $PMHx_site; ?>"
            required
          />
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="PMHx_results" class="form-label">ผลการตรวจ :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="PMHx_results"
            id="PMHx_results"
            class="form-control"
            value="<?php echo $PMHx_results; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-4">
        <label for="PMHx_pressure" class="form-label">Blood pressure :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="PMHx_pressure"
            id="PMHx_pressure"
            class="form-control"
            value="<?php echo $PMHx_pressure; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-4">
        <label for="PMHx_sugar" class="form-label">Blood Sugar :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="PMHx_sugar"
            id="PMHx_sugar"
            class="form-control"
            value="<?php echo $PMHx_sugar; ?>"
            required
          />
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <label for="PMHx_disease" class="col-sm-2 col-form-label">โรคประจำตัว :</label>
      <div class="col-sm-10">
        <input
          type="text"
          name="PMHx_disease"
          id="PMHx_disease"
          class="form-control"
          value="<?php echo $PMHx_disease; ?>"
          required
        />
      </div>
    </div>
    <hr />
    <div class="row gy-3 mb-3">
      <legend class="col-form-label col-sm-2 pt-0">Medication :</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="med_radio"
            id="radio12"
            onchange="toggleInput3(this)"
            value="Med"
            <?php echo ($med_radio == 'Med' ? 'checked' : ''); ?>
            required
          />
          <label class="form-check-label" for="radio12"> Med </label>
          <div class="col-sm-12" id="radioGroup3">
            <input 
              type="text" 
              name="med_radio_detail" 
              class="form-control" 
              id="input12"
              <?php echo ($med_radio != 'Med' ? 'disabled' : ''); ?>
              <?php echo ($med_radio == 'Med' ? "value='$med_radio_detail'" : ''); ?>  
              required 
            />
          </div>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="med_radio"
            id="radio13"
            onchange="toggleInput3(this)"
            value="OTC"
            <?php echo ($med_radio == 'OTC' ? 'checked' : ''); ?>
          />
          <label class="form-check-label" for="radio13"> OTC </label>
          <div class="col-sm-12" id="radioGroup3">
            <input 
              type="text" 
              name="med_radio_detail" 
              class="form-control" 
              id="input13" 
              <?php echo ($med_radio != 'OTC' ? 'disabled' : ''); ?>
              <?php echo ($med_radio == 'OTC' ? "value='$med_radio_detail'" : ''); ?>  
              required 
            />
          </div>
        </div>
      </div>
      <label for="med_KKK" class="col-sm-2 col-form-label">KMA/KEA/KFA :</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="4" name="med_KKK" id="med_KKK" required><?php echo $med_KKK; ?></textarea>
      </div>
    </div>
    <hr />
    <div class="row mb-3">
      <label for="FmHx_text" class="col-sm-2 col-form-label">FmHx :</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="4" name="FmHx_text" id="FmHx_text" required><?php echo $FmHx_text; ?></textarea>
      </div>
    </div>
    <hr />
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="inputText" class="col-sm-12 col-form-label"
          ><b>อาชีพ/งานอดิเรก/การใช้อุปกรณ์อิเล็กทรอนิกส์</b></label
        >
      </div>
      <div class="col-md-4">
        <label for="inputText" class="col-sm-12 col-form-label"><b>Dominant Hand : R / L</b></label>
      </div>
      <div class="col-md-4">
        <label for="inputText" class="col-sm-12 col-form-label"><b>Dominant Eye : R / L</b></label>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="ohe_work" class="form-label">Work :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="ohe_work"
            id="ohe_work"
            class="form-control"
            value="<?php echo $ohe_work; ?>"
            required
          />
        </div>
      </div>
      <div class="col-md-6">
        <label for="ohe_hobby" class="form-label">Hobby :</label>
        <div class="input-group mb-3">
          <input
            type="text"
            name="ohe_hobby"
            id="ohe_hobby"
            class="form-control"
            value="<?php echo $ohe_hobby; ?>"
            required
          />
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <input class="form-check-input" type="checkbox" name="ohe_checkbox1" id="checkbox30" value="Computer (Laptop /
        PC)"
        <?php echo ($ohe_checkbox1 == 'Computer (Laptop / PC)' ? 'checked' : ''); ?>
        onclick="toggleInput6(this)" />
        <label for="checkbox30" class="form-label">Computer (Laptop / PC) :</label>
        <div class="input-group mb-3" id="checkbox1Group1">
          <input type="text" name="ohe_checkbox_detail1" class="form-control" id="input30"
          <?php echo ($ohe_checkbox1 != "Computer (Laptop / PC)" ? 'disabled' : ''); ?>
          required value="<?php echo $ohe_checkbox_detail1; ?>" />
        </div>
      </div>
      <div class="col-md-6">
        <input class="form-check-input" type="checkbox" name="ohe_checkbox2" id="checkbox31" value="Tablet/Smartphone"
        <?php echo ($ohe_checkbox2 == 'Tablet/Smartphone' ? 'checked' : ''); ?>
        onclick="toggleInput6(this)" />
        <label for="checkbox31" class="form-label">Tablet/Smartphone :</label>
        <div class="input-group mb-3" id="checkbox1Group1">
          <input type="text" name="ohe_checkbox_detail2" class="form-control" id="input31"
          <?php echo ($ohe_checkbox2 != "Tablet/Smartphone" ? 'disabled' : ''); ?>
          required value="<?php echo $ohe_checkbox_detail2; ?>" />
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <input class="form-check-input" type="checkbox" name="ohe_checkbox3" id="checkbox32" value="Smoking"
        <?php echo ($ohe_checkbox3 == 'Smoking' ? 'checked' : ''); ?>
        onclick="toggleInput6(this)" />
        <label for="checkbox32" class="form-label">Smoking :</label>
        <div class="input-group mb-3">
          <input type="text" name="ohe_checkbox_detail3" class="form-control" id="input32"
          <?php echo ($ohe_checkbox3 != 'Smoking' ? 'disabled' : ''); ?>
          required value="<?php echo $ohe_checkbox_detail3; ?>" />
        </div>
      </div>
      <div class="col-md-6">
        <input class="form-check-input" type="checkbox" name="ohe_checkbox4" id="checkbox33" value="Alcohol"
        <?php echo ($ohe_checkbox4 == 'Alcohol' ? 'checked' : ''); ?>
        onclick="toggleInput6(this)" />
        <label for="checkbox33" class="form-label">Alcohol :</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="ohe_checkbox_detail4" id="input33"
          <?php echo ($ohe_checkbox4 != 'Alcohol' ? 'disabled' : ''); ?>
          required value="<?php echo $ohe_checkbox_detail4; ?>" />
        </div>
      </div>
    </div>
    <hr />
    <div class="row mb-3">
      <legend class="col-form-label col-sm-3 pt-0">การตอบสนองของคนไข้ :</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input 
            class="form-check-input" 
            type="radio" 
            name="pr_radio" 
            id="pr_radio1" 
            value="1x" 
            <?php echo ($pr_radio == '1x' ? 'checked' : ''); ?>
            required 
          />
          <label class="form-check-label" for="pr_radio1"> 1x </label>
        </div>
        <div class="form-check">
          <input 
            class="form-check-input" 
            type="radio" 
            name="pr_radio" 
            id="pr_radio2" 
            value="2x" 
            <?php echo ($pr_radio == '2x' ? 'checked' : ''); ?>
          />
          <label class="form-check-label" for="pr_radio2"> 2x </label>
        </div>
        <div class="form-check">
          <input 
            class="form-check-input" 
            type="radio" 
            name="pr_radio" 
            id="pr_radio3" 
            value="3x" 
            <?php echo ($pr_radio == '3x' ? 'checked' : ''); ?>
          />
          <label class="form-check-label" for="pr_radio3"> 3x </label>
        </div>
        <div class="form-check">
          <input 
            class="form-check-input" 
            type="radio" 
            name="pr_radio" 
            id="pr_radio4" 
            value="4x" 
            <?php echo ($pr_radio == '4x' ? 'checked' : ''); ?>
          />
          <label class="form-check-label" for="pr_radio4"> 4x </label>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <label for="pr_other" class="col-sm-3 col-form-label">ข้อมูลสังเกตุอื่นๆ :</label>
      <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="pr_other" id="pr_other" required><?php echo $pr_other; ?></textarea>
      </div>
    </div>
    <hr />

    <!-- End General Form Elements -->
  </div>
</div>
