<?php

require_once 'edit1.php';

?>
<!-- Page 3 -->
<div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
  <label for="inputText" class="col-sm-12 col-form-label"
    ><b>Visual Assessment Record (Ocular Health, Assessment and plan)</b></label
  >
  <hr />
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td width="33%" scope="col">
            <b>Anterior Segment :</b><br />
            <div align="center">Slit Lamp</div>
          </td>
          <td width="33%" align="center" scope="col"><b>OD</b></td>
          <td width="33%" align="center" scope="col"><b>OS</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">Lid/Lashes</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_lid_od; ?>"
                name="as_lid_od"
                id="as_lid_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_lid_os; ?>"
                name="as_lid_os"
                id="as_lid_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Conjunctiva</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_conjunctiva_od; ?>"
                name="as_conjunctiva_od"
                id="as_conjunctiva_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_conjunctiva_os; ?>"
                name="as_conjunctiva_os"
                id="as_conjunctiva_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Sclera</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_sclera_od; ?>"
                name="as_sclera_od"
                id="as_sclera_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_sclera_os; ?>"
                name="as_sclera_os"
                id="as_sclera_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Cornea</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_cornea_od; ?>"
                name="as_cornea_od"
                id="as_cornea_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_cornea_os; ?>"
                name="as_cornea_os"
                id="as_cornea_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">
            <div class="input-group mb-3">
              <span class="input-group-text" id="as_tear">Tear (TBUT/</span>
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_tear; ?>"
                name="as_tear"
                id="as_tear"
              />
              <span class="input-group-text">)</span>
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_tear_od; ?>"
                name="as_tear_od"
                id="as_tear_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_tear_os; ?>"
                name="as_tear_os"
                id="as_tear_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">iris (Shape & Color)</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_iris_od; ?>"
                name="as_iris_od"
                id="as_iris_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_iris_os; ?>"
                name="as_iris_os"
                id="as_iris_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Lens/Media</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_lens_od; ?>"
                name="as_lens_od"
                id="as_lens_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_lens_os; ?>"
                name="as_lens_os"
                id="as_lens_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Anterior Chamber (T/N)</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_anterior_od; ?>"
                name="as_anterior_od"
                id="as_anterior_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_anterior_os; ?>"
                name="as_anterior_os"
                id="as_anterior_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Pupil : Size (Light)</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_size_l_od; ?>"
                name="as_p_size_l_od"
                id="as_p_size_l_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_size_l_os; ?>"
                name="as_p_size_l_os"
                id="as_p_size_l_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Pupil : Size (Dim)</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_size_d_od; ?>"
                name="as_p_size_d_od"
                id="as_p_size_d_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_size_d_os; ?>"
                name="as_p_size_d_os"
                id="as_p_size_d_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Pupil : Direct</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_direct_od; ?>"
                name="as_p_direct_od"
                id="as_p_direct_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_direct_os; ?>"
                name="as_p_direct_os"
                id="as_p_direct_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Pupil : Consensual</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_consensual_od; ?>"
                name="as_p_consensual_od"
                id="as_p_consensual_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_consensual_os; ?>"
                name="as_p_consensual_os"
                id="as_p_consensual_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Pupil : Accommodate</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_accommodate_od; ?>"
                name="as_p_accommodate_od"
                id="as_p_accommodate_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_accommodate_os; ?>"
                name="as_p_accommodate_os"
                id="as_p_accommodate_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Pupil : Marcus Gunn</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_marcus_od; ?>"
                name="as_p_marcus_od"
                id="as_p_marcus_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $as_p_marcus_os; ?>"
                name="as_p_marcus_os"
                id="as_p_marcus_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <div align="center">
              <img rowspan="2" src="assets/img/20.jpg" class="img-fluid" alt="..." />
            </div>
            <input
              type="file"
              class="form-control"
              name="as_img"
              id="as_img"
              accept="image/jpeg, image/png, image/jpg"
              required
            />
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <label for="as_assessment" class="form-label">Assessment :</label>
            <div class="col-sm-12">
              <textarea class="form-control" required name="as_assessment" id="as_assessment" rows="4">
<?php echo $as_lid_os; ?></textarea
              >
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td width="20%" scope="col">
            <b>Posterior Segment :</b><br />
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="ps_radio"
                id="ps_radio1"
                required
                value="<?php //echo $as_lid_os;
?>"
              />
              <label class="form-check-label" for="ps_radio1"> Direct / Indirect Ophthalmoscope </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ps_radio" id="ps_radio2" />
              <label class="form-check-label" for="ps_radio2"> Fundus camera </label>
            </div>
          </td>
          <td width="10%" align="center" scope="col"><b>OD</b></td>
          <td width="10%" align="center" scope="col"><b>OS</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Media</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_media_od; ?>"
                name="ps_media_od"
                id="ps_media_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_media_os; ?>"
                name="ps_media_os"
                id="ps_media_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>Vitreous</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_vitreous_od; ?>"
                name="ps_vitreous_od"
                id="ps_vitreous_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_vitreous_os; ?>"
                name="ps_vitreous_os"
                id="ps_vitreous_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>C/D ratio</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_cd_od; ?>"
                name="ps_cd_od"
                id="ps_cd_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_cd_os; ?>"
                name="ps_cd_os"
                id="ps_cd_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>Disc Margin (Rim Tissue)</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_disc_od; ?>"
                name="ps_disc_od"
                id="ps_disc_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_disc_os; ?>"
                name="ps_disc_os"
                id="ps_disc_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>AV ratio</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_avratio_od; ?>"
                name="ps_avratio_od"
                id="ps_avratio_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_avratio_os; ?>"
                name="ps_avratio_os"
                id="ps_avratio_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>AV crossing</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_avcrossing_od; ?>"
                name="ps_avcrossing_od"
                id="ps_avcrossing_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_avcrossing_os; ?>"
                name="ps_avcrossing_os"
                id="ps_avcrossing_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>Macular</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_macular_od; ?>"
                name="ps_macular_od"
                id="ps_macular_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_macular_os; ?>"
                name="ps_macular_os"
                id="ps_macular_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>Fovea reflex</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_fovea_od; ?>"
                name="ps_fovea_od"
                id="ps_fovea_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_fovea_os; ?>"
                name="ps_fovea_os"
                id="ps_fovea_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>Background</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_bg_od; ?>"
                name="ps_bg_od"
                id="ps_bg_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_bg_os; ?>"
                name="ps_bg_os"
                id="ps_bg_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td>Periphery</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_periphery_od; ?>"
                name="ps_periphery_od"
                id="ps_periphery_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $ps_periphery_os; ?>"
                name="ps_periphery_os"
                id="ps_periphery_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="3">
            General Examination :
            <div align="center">
              <img rowspan="2" src="assets/img/21.jpg" class="img-fluid" alt="..." />
            </div>
            <input
              type="file"
              class="form-control"
              name="ps_img"
              id="ps_img"
              accept="image/jpeg, image/png, image/jpg"
              required
              value="<?php echo $ps_img; ?>"
            />
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <label for="ps_treatment" class="form-label">Treatment Plan :</label>
            <div class="col-sm-12">
              <textarea class="form-control" name="ps_treatment" id="ps_treatment" rows="4" required>
<?php echo $ps_treatment; ?></textarea
              >
            </div>
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <label for="ps_next" class="form-label">Next Appointment : </label>
            <input
              type="text"
              name="ps_next"
              id="ps_next"
              class="form-control mb-sm-3"
              required
              value="<?php echo $ps_next; ?>"
            />
            <label for="ps_examinedby" class="form-label">Examined by : </label>
            <input
              type="text"
              name="ps_examinedby"
              id="ps_examinedby"
              class="form-control mb-sm-3"
              required
              value="<?php echo $ps_examinedby; ?>"
            />
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="row mb-3 mt-sm-5 mt-3">
    <p><b>Prescription :</b></p>
    <div class="col-md-4">
      <label for="pc_name" class="form-label">Name :</label>
      <input type="text" class="form-control" required value="<?php echo $pc_name; ?>" name="pc_name" id="pc_name" />
    </div>
    <div class="col-md-4">
      <label for="pc_age" class="form-label">Age :</label>
      <div class="input-group">
        <input type="text" class="form-control" required value="<?php echo $pc_age; ?>" name="pc_age" id="pc_age" />
        <span class="input-group-text">(years)</span>
      </div>
    </div>
    <div class="col-md-4">
      <label for="pc_date" class="form-label">Date of Exam :</label>
      <input type="date" class="form-control" required value="<?php echo $pc_date; ?>" name="pc_date" id="pc_date" />
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td scope="col"></td>
          <td scope="col" class="text-center fw-bold">OD</td>
          <td scope="col" class="text-center fw-bold">OS</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">Sphere</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_sphere_od; ?>"
                name="pc_sphere_od"
                id="pc_sphere_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_sphere_os; ?>"
                name="pc_sphere_os"
                id="pc_sphere_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Cylinder</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_cylinder_od; ?>"
                name="pc_cylinder_od"
                id="pc_cylinder_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_cylinder_os; ?>"
                name="pc_cylinder_os"
                id="pc_cylinder_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Axis</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_axis_od; ?>"
                name="pc_axis_od"
                id="pc_axis_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_axis_os; ?>"
                name="pc_axis_os"
                id="pc_axis_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Add</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_add_od; ?>"
                name="pc_add_od"
                id="pc_add_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_add_os; ?>"
                name="pc_add_os"
                id="pc_add_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Prism / Base</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_prism_od; ?>"
                name="pc_prism_od"
                id="pc_prism_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_prism_os; ?>"
                name="pc_prism_os"
                id="pc_prism_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">VA</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_va_od; ?>"
                name="pc_va_od"
                id="pc_va_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_va_os; ?>"
                name="pc_va_os"
                id="pc_va_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">P.D. (Far/Near)</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_pd_od; ?>"
                name="pc_pd_od"
                id="pc_pd_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_pd_os; ?>"
                name="pc_pd_os"
                id="pc_pd_os"
              />
            </div>
          </td>
        </tr>
        <tr>
          <td scope="row">Fitting Height</td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_fitting_od; ?>"
                name="pc_fitting_od"
                id="pc_fitting_od"
              />
            </div>
          </td>
          <td>
            <div class="col-md-12">
              <input
                type="text"
                class="form-control"
                required
                value="<?php echo $pc_fitting_os; ?>"
                name="pc_fitting_os"
                id="pc_fitting_os"
              />
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row my-3 gy-2">
    <div class="col-md-4">
      <input 
        class="form-check-input" 
        type="checkbox" 
        name="pc_checkbox1" 
        id="checkbox35" 
        value="Distance"
        onclick="toggleInput6(this)"
        <?php echo ($pc_checkbox1 == 'Distance' ? 'checked' : ''); ?>
      />
      <label for="checkbox35" class="form-label">Distance :</label>
      <div class="input-group mb-3" id="checkbox1Group1">
        <input
          type="text"
          class="form-control"
          name="pc_checkbox_detail1"
          id="input35"
          value="<?php echo $pc_checkbox_detail1; ?>"
          <?php echo ($pc_checkbox1 != 'Distance' ? 'disabled' : ''); ?>
          required
        />
      </div>
    </div>
    <div class="col-md-4">
      <input
        class="form-check-input"
        type="checkbox"
        name="pc_checkbox2"
        id="checkbox36"
        value="Near"
        onclick="toggleInput6(this)"
        <?php echo ($pc_checkbox2 == 'Near' ? 'checked' : ''); ?>
      />
      <label for="checkbox36" class="form-label">Near :</label>
      <div class="input-group mb-3" id="checkbox1Group1">
        <input
          type="text"
          class="form-control"
          required
          value="<?php echo $pc_checkbox_detail2; ?>"
          name="pc_checkbox_detail2"
          id="input36"
          <?php echo ($pc_checkbox2 != 'Near' ? 'disabled' : ''); ?>
        />
      </div>
    </div>
    <div class="col-md-4">
      <input
        class="form-check-input"
        type="checkbox"
        name="pc_checkbox3"
        id="checkbox37"
        value="Computer"
        onclick="toggleInput6(this)"
        <?php echo ($pc_checkbox3 == 'Computer' ? 'checked' : ''); ?>
      />
      <label for="checkbox37" class="form-label">Computer :</label>
      <div class="input-group mb-3" id="checkbox1Group1">
        <input
          type="text"
          class="form-control"
          required
          value="<?php echo $pc_checkbox_detail3; ?>"
          name="pc_checkbox_detail3"
          id="input37"
          <?php echo ($pc_checkbox3 != 'Computer' ? 'disabled' : ''); ?>
        />
      </div>
    </div>
    <div class="col-md-4">
      <input
        class="form-check-input"
        type="checkbox"
        name="pc_checkbox4"
        id="checkbox38"
        value="Bifocal (FT/KT) Seg-height"
        onclick="toggleInput6(this)"
        <?php echo ($pc_checkbox4 == 'Bifocal (FT/KT) Seg-height' ? 'checked' : ''); ?>
      />
      <label for="checkbox38" class="form-label">Bifocal (FT/KT) Seg-height :</label>
      <div class="input-group mb-3" id="checkbox1Group1">
        <input
          type="text"
          class="form-control"
          required
          value="<?php echo $pc_checkbox_detail4; ?>"
          name="pc_checkbox_detail4"
          id="input38"
          <?php echo ($pc_checkbox4 != 'Bifocal (FT/KT) Seg-height' ? 'disabled' : ''); ?>
        />
        <span class="input-group-text">(mm.)</span>
      </div>
    </div>
    <div class="col-md-4">
      <input
        class="form-check-input"
        type="checkbox"
        name="pc_checkbox5"
        id="checkbox39"
        value="Progressive"
        onclick="toggleInput6(this)"
        <?php echo ($pc_checkbox5 == 'Progressive' ? 'checked' : ''); ?>
      />
      <label for="checkbox39" class="form-label">Progressive :</label>
      <div class="input-group mb-3" id="checkbox1Group1">
        <input
          type="text"
          class="form-control"
          required
          value="<?php echo $pc_checkbox_detail5; ?>"
          name="pc_checkbox_detail5"
          id="input39"
          <?php echo ($pc_checkbox5 != 'Progressive' ? 'disabled' : ''); ?>
        />
        <span class="input-group-text">(cm.)</span>
      </div>
    </div>
    <div class="col-md-4">
      <input
        class="form-check-input"
        type="checkbox"
        name="pc_checkbox6"
        id="checkbox41"
        value="Tinted"
        onclick="toggleInput6(this)"
        <?php echo ($pc_checkbox6 == 'Tinted' ? 'checked' : ''); ?>
      />
      <label for="checkbox41" class="form-label">Tinted :</label>
      <div class="input-group mb-3">
        <input
          type="text"
          class="form-control"
          required
          value="<?php echo $pc_checkbox_detail6; ?>"
          name="pc_checkbox_detail6"
          id="input41"
          <?php echo ($pc_checkbox6 != 'Tinted' ? 'disabled' : ''); ?>
        />
      </div>
    </div>
    <div class="col-md-12">
      <input
        class="form-check-input"
        type="checkbox"
        name="pc_checkbox7"
        id="checkbox40"
        value="UV"
        onclick="toggleInput6(this)"
        <?php echo ($pc_checkbox7 == 'UV' ? 'checked' : ''); ?>
      />
      <label for="checkbox40" class="form-label">UV</label>
    </div>
  </div>
  <div class="row mb-3">
    <label for="pc_note" class="col-sm-1 col-form-label">Note :</label>
    <div class="col-sm-12">
      <textarea class="form-control" required name="pc_note" id="pc_note" rows="5"><?php echo $pc_note; ?></textarea>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <button type="submit" name="submit" class="btn btn-success w-100">Submit</button>
    </div>
  </div>
</div>
