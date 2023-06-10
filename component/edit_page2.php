<?php

require_once ('get_edit.php');

?>
<!-- Page 2 -->
<div class="tab-pane fade px-2" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
  <div class="card-body">
    <div class="row mb-3">
      <div class="col-12">
        <p class="fw-bold">Visual Assessment Record (Preliminary test, Refraction and Binocular Vision)</p>
        <hr class="mb-4" />
      </div>

      <div class="col-12">
        <p class="fw-bold">Old Rx :</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="old_Rx" id="old_Rx1" value="แว่นมองไกล" <?php echo ($old_Rx == 'แว่นมองไกล' ? 'checked' : ''); ?> required />
          <label class="form-check-label" for="old_Rx1">แว่นมองไกล</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="old_Rx" id="old_Rx2" value="แว่นมองใกล้" <?php echo ($old_Rx == 'แว่นมองใกล้' ? 'checked' : ''); ?> />
          <label class="form-check-label" for="old_Rx2">แว่นมองใกล้</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="old_Rx" id="old_Rx3" value="แว่นสองชั้น" <?php echo ($old_Rx == 'แว่นสองชั้น' ? 'checked' : ''); ?> />
          <label class="form-check-label" for="old_Rx3">แว่นสองชั้น</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="old_Rx" id="old_Rx4" value="แว่นโปรเกรสซีฟ" <?php echo ($old_Rx == 'แว่นโปรเกรสซีฟ' ? 'checked' : ''); ?> />
          <label class="form-check-label" for="old_Rx4">แว่นโปรเกรสซีฟ</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="old_Rx" id="old_Rx5" value="Prism" <?php echo ($old_Rx == 'Prism' ? 'checked' : ''); ?> />
          <label class="form-check-label" for="old_Rx5">Prism</label>
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <p class="fw-bold mb-0">1st Old Rx :</p>
      <div class="col-12 col-md-3">
        <label for="old_Rx1_od" class="form-label">OD :</label>
        <input type="text" name="old_Rx1_od" id="old_Rx1_od" class="form-control" value="<?php echo $old_Rx1_od; ?>" required />
      </div>
      <div class="col-12 col-md-3">
        <label for="old_Rx1_os" class="form-label">OS :</label>
        <input type="text" name="old_Rx1_os" id="old_Rx1_os" class="form-control" value="<?php echo $old_Rx1_os; ?>" required />
      </div>
      <div class="col-12 col-md-3">
        <label for="old_Rx1_add" class="form-label">Add :</label>
        <input type="text" name="old_Rx1_add" id="old_Rx1_add" class="form-control" value="<?php echo $old_Rx1_add; ?>" required />
      </div>
      <div class="col-12 col-md-3">
        <label for="old_Rx1_pd" class="form-label">P.D. :</label>
        <div class="input-group mb-3">
          <input type="text" name="old_Rx1_pd" id="old_Rx1_pd" class="form-control" value="<?php echo $old_Rx1_pd; ?>" required />
          <span class="input-group-text" id="old_Rx1_pd">mm.</span>
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <p class="fw-bold mb-0">2nd Old Rx :</p>
      <div class="col-12 col-md-3">
        <label for="old_Rx2_od" class="form-label">OD :</label>
        <input type="text" name="old_Rx2_od" id="old_Rx2_od" class="form-control" value="<?php echo $old_Rx2_od; ?>" required />
      </div>
      <div class="col-12 col-md-3">
        <label for="old_Rx2_os" class="form-label">OS :</label>
        <input type="text" name="old_Rx2_os" id="old_Rx2_os" class="form-control" value="<?php echo $old_Rx2_os; ?>" required />
      </div>
      <div class="col-12 col-md-3">
        <label for="old_Rx2_add" class="form-label">Add :</label>
        <input type="text" name="old_Rx2_add" id="old_Rx2_add" class="form-control" value="<?php echo $old_Rx2_add; ?>" required />
      </div>
      <div class="col-12 col-md-3">
        <label for="old_Rx2_pd" class="form-label">P.D. :</label>
        <div class="input-group mb-3">
          <input type="text" name="old_Rx2_pd" id="old_Rx2_pd" class="form-control" value="<?php echo $old_Rx2_pd; ?>" required />
          <span class="input-group-text" id="old_Rx1_pd">mm.</span>
        </div>
      </div>
    </div>

    <div class="row mb-3 align-items-center gy-2">
      <p class="fw-bold mb-1">VA.sc :</p>
      <p class="m-0">Distance :</p>
      <label for="vasc_distance_od" class="col-3 col-md-1 form-label">OD:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_distance_od" id="vasc_distance_od" class="form-control" value="<?php echo $old_VAsc_distance_od; ?>" required />
      </div>
      <label for="vasc_distance_os" class="col-3 col-md-1 form-label">OS:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_distance_os" id="vasc_distance_os" class="form-control" value="<?php echo $old_VAsc_distance_os; ?>" required />
      </div>
      <label for="vasc_distance_ou" class="col-3 col-md-1 form-label">OU:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_distance_ou" id="vasc_distance_ou" class="form-control" value="<?php echo $old_VAsc_distance_ou; ?>" required />
      </div>

      <label for="near" class="form-label mb-0 mt-4">Near :</label>
      <label for="vasc_near_od" class="col-3 col-md-1 form-label">OD:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_near_od" id="vasc_near_od" class="form-control" value="<?php echo $old_VAsc_near_od; ?>" required />
      </div>
      <label for="vasc_near_os" class="col-3 col-md-1 form-label">OS:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_near_os" id="vasc_near_os" class="form-control" value="<?php echo $old_VAsc_near_os; ?>" required />
      </div>
      <label for="vasc_near_ou" class="col-3 col-md-1 form-label">OU:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_near_ou" id="vasc_near_ou" class="form-control" value="<?php echo $old_VAsc_near_ou; ?>" required />
      </div>

      <label for="pinhole" class="form-label mb-0 mt-4">Pinhole VA :</label>
      <label for="vasc_pinhole_od" class="col-3 col-md-1 form-label">OD:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_pinhole_od" id="vasc_pinhole_od" class="form-control" value="<?php echo $old_VAsc_pinhole_od; ?>" required />
      </div>
      <label for="vasc_pinhole_os" class="col-3 col-md-1 form-label">OS:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vasc_pinhole_os" id="vasc_pinhole_os" class="form-control" value="<?php echo $old_VAsc_pinhole_os; ?>" required />
      </div>
    </div>

    <div class="row mb-3 align-items-center gy-2">
      <p class="fw-bold mb-0 mt-4">VA.cc :</p>
      <label for="distance" class="form-label mb-0">Distance</label>
      <label for="vacc_distance_od" class="col-3 col-md-1 form-label">OD:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_distance_od" id="vacc_distance_od" class="form-control" value="<?php echo $old_VAcc_distance_od; ?>" required />
      </div>
      <label for="vacc_distance_os" class="col-3 col-md-1 form-label">OS:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_distance_os" id="vacc_distance_os" class="form-control" value="<?php echo $old_VAcc_distance_os; ?>" required />
      </div>
      <label for="vacc_distance_ou" class="col-3 col-md-1 form-label">OU:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_distance_ou" id="vacc_distance_ou" class="form-control" value="<?php echo $old_VAcc_distance_ou; ?>" required />
      </div>

      <label for="near" class="form-label mb-0 mt-4">Near</label>
      <label for="vacc_near_od" class="col-3 col-md-1 form-label">OD:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_near_od" id="vacc_near_od" class="form-control" value="<?php echo $old_VAcc_near_od; ?>" required />
      </div>
      <label for="vacc_near_os" class="col-3 col-md-1 form-label">OS:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_near_os" id="vacc_near_os" class="form-control" value="<?php echo $old_VAcc_near_os; ?>" required />
      </div>
      <label for="vacc_near_ou" class="col-3 col-md-1 form-label">OU:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_near_ou" id="vacc_near_ou" class="form-control" value="<?php echo $old_VAcc_near_ou; ?>" required />
      </div>

      <label for="phinhole" class="form-label mb-0 mt-4">Pinhole VA :</label>
      <label for="vacc_pinhole_od" class="col-3 col-md-1 form-label">OD:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_pinhole_od" id="vacc_pinhole_od" class="form-control" value="<?php echo $old_VAcc_pinhole_od; ?>" required />
      </div>
      <label for="vacc_pinhole_os" class="col-3 col-md-1 form-label">OS:</label>
      <div class="col-9 col-md-3">
        <input type="text" name="vacc_pinhole_os" id="vacc_pinhole_os" class="form-control" value="<?php echo $old_VAcc_pinhole_os; ?>" required />
      </div>
    </div>

    <hr class="my-4" />

    <div class="row align-items-center gy-3 mb-3">
      <p class="fw-bold">Preliminary Exam :</p>
      <label for="pd_distance" class="col-4 col-md-2 form-label">P.D. Distance :</label>
      <div class="col-8 col-md-4">
        <div class="input-group">
          <input type="text" name="pd_distance" id="pd_distance" class="form-control" value="<?php echo $pe_distance; ?>" required />
          <span class="input-group-text" id="pd_distance">mm</span>
        </div>
      </div>
      <label for="pd_near" class="col-4 col-md-2 form-label">P.D. Near :</label>
      <div class="col-8 col-md-4">
        <div class="input-group">
          <input type="text" name="pd_near" id="pd_near" class="form-control" value="<?php echo $pe_near; ?>" required />
          <span class="input-group-text" id="pd_near">mm</span>
        </div>
      </div>

      <p class="mb-0 mt-4">NPA (Amp) :</p>
      <label for="npa_od" class="col-4 col-md-2 form-label">OD:</label>
      <div class="col-8 col-md-4">
        <div class="input-group">
          <input type="text" name="npa_od" id="npa_od" class="form-control" value="<?php echo $pe_npa_od; ?>" required />
          <span class="input-group-text" id="npa_od">cm</span>
        </div>
      </div>
      <label for="npa_os" class="col-4 col-md-2 form-label">OS:</label>
      <div class="col-8 col-md-4">
        <div class="input-group">
          <input type="text" name="npa_os" id="npa_os" class="form-control" value="<?php echo $pe_npa_os; ?>" required />
          <span class="input-group-text" id="npa_os">cm</span>
        </div>
      </div>

      <p class="mb-0 mt-4">AA :</p>
      <label for="aa_od" class="col-4 col-md-2 form-label">OD:</label>
      <div class="col-8 col-md-4">
        <div class="input-group">
          <input type="text" name="aa_od" id="aa_od" class="form-control" value="<?php echo $pe_aa_od; ?>" required />
          <span class="input-group-text" id="aa_od">D</span>
        </div>
      </div>
      <label for="aa_os" class="col-4 col-md-2 form-label">OS:</label>
      <div class="col-8 col-md-4">
        <div class="input-group">
          <input type="text" name="aa_os" id="aa_os" class="form-control" value="<?php echo $pe_aa_os; ?>" required />
          <span class="input-group-text" id="aa_os">D</span>
        </div>
      </div>

      <label for="npc" class="col-6 col-md-4 form-label">NPC : (Break/Recovery)</label>
      <div class="col-6 col-md-8">
        <div class="input-group">
          <input type="text" name="npc1" id="npc1" class="form-control" value="<?php echo $npc1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="npc2" id="npc2" class="form-control" value="<?php echo $npc2; ?>" required />
          <span class="input-group-text">cm</span>
        </div>
      </div>

      <label for="motility" class="col-6 col-md-4 form-label">Motility (EOM) :</label>
      <div class="col-6 col-md-8">
        <input type="text" name="motility" id="motility" class="form-control" value="<?php echo $pe_motility; ?>" required />
      </div>

      <label for="confrontation" class="col-6 col-md-4 form-label">Confrontation :</label>
      <div class="col-6 col-md-8">
        <input type="text" name="confrontation" id="confrontation" class="form-control" value="<?php echo $pe_con; ?>" required />
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td scope="col" class="p-0">
              <img src="assets/img/11.jpg" class="img-fluid" alt="..." />
            </td>
            <td scope="col" class="p-0">
              <img src="assets/img/15.jpg" class="img-fluid" alt="..." />
            </td>
          </tr>
        </thead>
      </table>
    </div>

    <div class="row mb-3">
      <div class="col-12 col-md-4">
        <label for="pe_cover_distance" class="form-label">Cover test : Distance :</label>
        <input type="text" name="pe_cover_distance" id="pe_cover_distance" class="form-control" value="<?php echo $pe_cover_distance; ?>" required />
      </div>
      <div class="col-12 col-md-4">
        <label for="pe_cover_near" class="form-label">Near :</label>
        <input type="text" name="pe_cover_near" id="pe_cover_near" class="form-control" value="<?php echo $pe_cover_near; ?>" required />
      </div>
      <div class="col-12 col-md-4">
        <label for="pe_cover_dots" class="form-label">Worth's 4 dots :</label>
        <input type="text" name="pe_cover_dots" id="pe_cover_dots" class="form-control" value="<?php echo $pe_cover_dots; ?>" required />
      </div>
    </div>

    <div class="row mb-3 gy-3">
      <div class="col-12 col-md-8">
        <label for="pe_so_near" class="form-label">Stereopsos : at Near</label>
        <div class="input-group">
          <input type="text" name="pe_so_near" id="pe_so_near" class="form-control" value="<?php echo $pe_so_near; ?>" required />
          <span class="input-group-text">secs of arc</span>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <label for="pe_so_type" class="form-label">Type :</label>
        <input type="text" name="pe_so_type" id="pe_so_type" class="form-control" value="<?php echo $pe_so_type; ?>" required />
      </div>
    </div>

    <div class="row align-items-center gy-2 mb-3">
      <p class="mb-0">Color Vision</p>
      <label for="pe_color_od" class="col-3 col-md-1 form-label">OD :</label>
      <div class="col-9 col-md-3">
        <input type="text" name="pe_color_od" id="pe_color_od" class="form-control" value="<?php echo $pe_color_od; ?>" required />
      </div>
      <label for="pe_color_os" class="col-3 col-md-1 form-label">OS :</label>
      <div class="col-9 col-md-3">
        <input type="text" name="pe_color_os" id="pe_color_os" class="form-control" value="<?php echo $pe_color_os; ?>" required />
      </div>
      <label for="pe_color_type" class="col-3 col-md-1 form-label">Type :</label>
      <div class="col-9 col-md-3">
        <input type="text" name="pe_color_type" id="pe_color_type" class="form-control" value="<?php echo $pe_color_type; ?>" required />
      </div>
    </div>

    <div class="row mb-3 gy-3">
      <div class="col-12">
        <label for="pe_grid" class="form-label">Amsler grid :</label>
        <input type="text" name="pe_grid" id="pe_grid" class="form-control" value="<?php echo $pe_grid; ?>" required />
      </div>
    </div>

    <div class="row align-items-center gy-2 mb-3">
      <p class="mb-0">IOP</p>
      <label for="pe_grid_od" class="col-3 col-md-1 form-label">OD :</label>
      <div class="col-9 col-md-3">
        <input type="text" name="pe_grid_od" id="pe_grid_od" class="form-control" value="<?php echo $pe_grid_od; ?>" required />
      </div>
      <label for="pe_grid_os" class="col-3 col-md-1 form-label">OS :</label>
      <div class="col-9 col-md-3">
        <div class="input-group">
          <input type="text" name="pe_grid_os" id="pe_grid_os" class="form-control" value="<?php echo $pe_grid_os; ?>" required />
          <span class="input-group-text">mm.Hg</span>
        </div>
      </div>
      <label for="pe_grid_time" class="col-3 col-md-1 form-label">Time :</label>
      <div class="col-9 col-md-3">
        <input type="text" name="pe_grid_time" id="pe_grid_time" class="form-control" value="<?php echo $pe_grid_time; ?>" required />
      </div>
    </div>

    <hr class="my-4" />

    <!-- Refraction -->

    <div class="row align-items-center gy-2 mb-3">
      <p class="fw-bold">Refraction :</p>
      <!-- Keratometry -->
      <p class="mb-0">Keratometry :</p>
      <label for="ref_km_od1" class="form-label col-3 col-md-2">OD :</label>
      <div class="col-9 col-md-4">
        <div class="input-group" id="ref_km_od">
          <input type="text" name="ref_km_od1" id="ref_km_od1" class="form-control" value="<?php echo $ref_km_od1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="ref_km_od2" id="ref_km_od2" class="form-control" value="<?php echo $ref_km_od2; ?>" required />
        </div>
      </div>
      <label for="ref_km_os1" class="form-label col-3 col-md-2">OS :</label>
      <div class="col-9 col-md-4">
        <div class="input-group">
          <input type="text" name="ref_km_os1" id="ref_km_os1" class="form-control" value="<?php echo $ref_km_os1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="ref_km_os2" id="ref_km_os2" class="form-control" value="<?php echo $ref_km_os2; ?>" required />
        </div>
      </div>
    </div>

    <!-- Static Retinoscope -->
    <div class="row align-items-center gy-2 mb-3">
      <p class="mb-0">Static Retinoscope :</p>
      <label for="ref_sr_od" class="form-label col-3 col-md-2">OD :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_sr_od" id="ref_sr_od" class="form-control" value="<?php echo $ref_sr_od; ?>" required />
      </div>

      <label for="ref_sr_od_va" class="form-label col-3 col-md-2">VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_sr_od_va" id="ref_sr_od_va" class="form-control" value="<?php echo $ref_sr_od_va; ?>" required />
      </div>

      <label for="ref_sr_os" class="form-label col-3 col-md-2">OS :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_sr_os" id="ref_sr_os" class="form-control" value="<?php echo $ref_sr_os; ?>" required />
      </div>

      <label for="ref_sr_os_va" class="form-label col-3 col-md-2">VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_sr_os_va" id="ref_sr_os_va" class="form-control" value="<?php echo $ref_sr_os_va; ?>" required />
      </div>

      <label for="ref_sr_ou_va" class="form-label col-3 col-md-2">OU.VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_sr_ou_va" id="ref_sr_ou_va" class="form-control" value="<?php echo $ref_sr_ou_va; ?>" required />
      </div>
    </div>

    <!-- Dynamic Retinoscope -->
    <div class="row align-items-center gy-2 mb-3">
      <p class="mb-0">Dynamic Retinoscope :</p>
      <label for="ref_dr_od" class="form-label col-3 col-md-2">OD :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_dr_od" id="ref_dr_od" class="form-control" value="<?php echo $ref_dr_od; ?>" required />
      </div>

      <label for="ref_dr_od_va" class="form-label col-3 col-md-2">VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_dr_od_va" id="ref_dr_od_va" class="form-control" value="<?php echo $ref_dr_od_va; ?>" required />
      </div>

      <label for="ref_dr_os" class="form-label col-3 col-md-2">OS :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_dr_os" id="ref_dr_os" class="form-control" value="<?php echo $ref_dr_os; ?>" required />
      </div>

      <label for="ref_dr_os_va" class="form-label col-3 col-md-2">VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_dr_os_va" id="ref_dr_os_va" class="form-control" value="<?php echo $ref_dr_os_va; ?>" required />
      </div>

      <label for="ref_dr_ou_va" class="form-label col-3 col-md-2">OU.VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_dr_ou_va" id="ref_dr_ou_va" class="form-control" value="<?php echo $ref_dr_ou_va; ?>" required />
      </div>
    </div>

    <!-- Monocular Subjective -->
    <div class="row align-items-center gy-2 mb-3">
      <p class="mb-0">Monocular Subjective : (MPMVA)</p>
      <label for="ref_ms_od" class="form-label col-3 col-md-2">OD :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_ms_od" id="ref_ms_od" class="form-control" value="<?php echo $ref_ms_od; ?>" required />
      </div>

      <label for="ref_ms_od_va" class="form-label col-3 col-md-2">VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_ms_od_va" id="ref_ms_od_va" class="form-control" value="<?php echo $ref_ms_od_va; ?>" required />
      </div>

      <label for="ref_ms_os" class="form-label col-3 col-md-2">OS :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_ms_os" id="ref_ms_os" class="form-control" value="<?php echo $ref_ms_os; ?>" required />
      </div>

      <label for="ref_ms_os_va" class="form-label col-3 col-md-2">VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_ms_os_va" id="ref_ms_os_va" class="form-control" value="<?php echo $ref_ms_os_va; ?>" required />
      </div>

      <label for="ref_ms_ou_va" class="form-label col-3 col-md-2">OU.VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_ms_ou_va" id="ref_ms_ou_va" class="form-control" value="<?php echo $ref_ms_ou_va; ?>" required />
      </div>
    </div>

    <!-- Binocular Subjective -->
    <div class="row align-items-center gy-2 mb-3">
      <p class="mb-0">Binocular Subjective : (Balance)</p>
      <label for="ref_bs_od" class="form-label col-3 col-md-2">OD :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_bs_od" id="ref_bs_od" class="form-control" value="<?php echo $ref_bs_od; ?>" required />
      </div>

      <label for="ref_bs_os" class="form-label col-3 col-md-2">OS :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_bs_os" id="ref_bs_os" class="form-control" value="<?php echo $ref_bs_os; ?>" required />
      </div>

      <label for="ref_bs_ou_va" class="form-label col-3 col-md-2">OU.VA :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="ref_bs_ou_va" id="ref_bs_ou_va" class="form-control" value="<?php echo $ref_bs_ou_va; ?>" required />
      </div>
    </div>
    <!-- End Refraction -->

    <hr class="my-4" />

    <!-- Binocular Vision -->
    <p class="fw-bold">Binocular Vision :</p>
    <div class="row mb-3">
      <div class="col-md-4">
        <p class="fw-bold">Distance</p>
      </div>
    </div>

    <div class="row mb-3 gy-3">
      <label for="" class="form-label col-md-2">Phoria :</label>
      <div class="col-md-10">
        <label for="bv_distance_h" class="form-label">Horizontal :</label>
        <input type="text" name="bv_distance_h" id="bv_distance_h" class="form-control" value="<?php echo $bv_distance_h; ?>" required />
      </div>

      <label for="inputEmail5" class="form-label col-md-2">Vergence :</label>
      <div class="col-md-5">
        <label for="bv_distance_bi" class="form-label">BI :</label>
        <div class="input-group">
          <input type="text" name="bv_distance_bi1" id="bv_distance_bi" class="form-control" value="<?php echo $bv_distance_bi1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_distance_bi2" id="bv_distance_bi" class="form-control" value="<?php echo $bv_distance_bi2; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_distance_bi3" id="bv_distance_bi" class="form-control" value="<?php echo $bv_distance_bi3; ?>" required />
        </div>
      </div>

      <div class="col-md-5">
        <label for="bv_distance_bo" class="form-label">BO :</label>
        <div class="input-group mb-3">
          <input type="text" name="bv_distance_bo1" id="bv_distance_bo" class="form-control" value="<?php echo $bv_distance_bo1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_distance_bo2" id="bv_distance_bo" class="form-control" value="<?php echo $bv_distance_bo2; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_distance_bo3" id="bv_distance_bo" class="form-control" value="<?php echo $bv_distance_bo3; ?>" required />
        </div>
      </div>

      <label for="" class="form-label col-md-2">Phoria :</label>
      <div class="col-md-10">
        <label for="bv_distance_vertical" class="form-label">Vertical :</label>
        <input type="text" name="bv_distance_vertical" id="bv_distance_vertical" class="form-control" value="<?php echo $bv_distance_vertical; ?>" required />
      </div>

      <label for="" class="form-label col-md-2">Vergence :</label>
      <div class="col-md-5">
        <label for="bv_distance_supra" class="form-label">Supra :</label>
        <div class="input-group">
          <input type="text" name="bv_distance_supra1" id="bv_distance_supra" class="form-control" value="<?php echo $bv_distance_supra1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_distance_supra2" id="bv_distance_supra" class="form-control" value="<?php echo $bv_distance_supra2; ?>" required />
        </div>
      </div>
      <div class="col-md-5">
        <label for="bv_distance_infra" class="form-label">Infra :</label>
        <div class="input-group">
          <input type="text" name="bv_distance_infra1" id="bv_distance_infra" class="form-control" value="<?php echo $bv_distance_infra1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_distance_infra2" id="bv_distance_infra" class="form-control" value="<?php echo $bv_distance_infra2; ?>" required />
        </div>
      </div>
    </div>

    <hr class="my-4" />

    <div class="row mb-3">
      <div class="col-md-4">
        <label for="near" class="form-label"
          ><b>Near</b> (On :
          <input 
            type="radio" 
            name="bv_near_radio" 
            id="bv_near_radio1" 
            class="form-check-input" 
            value="BVA" 
            required 
            <?php echo ($bv_near_radio == 'BVA' ? 'checked' : ''); ?>
          />
          <label for="bv_near_radio1" class="form-check-label">BVA &nbsp;</label>
          <input 
            type="radio" 
            name="bv_near_radio" 
            id="bv_near_radio2" 
            class="form-check-input" 
            value="BCC" 
            <?php echo ($bv_near_radio == 'BCC' ? 'checked' : ''); ?> 
          />
          <label for="bv_near_radio2" class="form-check-label"> BCC )</label>
        </label>
      </div>
    </div>

    <div class="row mb-3 gy-3">
      <label for="" class="form-label col-md-2">Phoria :</label>
      <div class="col-md-10">
        <label for="bv_near_h" class="form-label">Horizontal :</label>
        <input type="text" name="bv_near_h" id="bv_near_h" class="form-control" value="<?php echo $bv_near_h; ?>" required />
      </div>

      <label for="inputEmail5" class="form-label col-md-2">Vergence :</label>
      <div class="col-md-5">
        <label for="bv_near_bi" class="form-label">BI :</label>
        <div class="input-group">
          <input type="text" name="bv_near_bi1" id="bv_near_bi" class="form-control" value="<?php echo $bv_near_bi1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_near_bi2" id="bv_near_bi" class="form-control" value="<?php echo $bv_near_bi2; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_near_bi3" id="bv_near_bi" class="form-control" value="<?php echo $bv_near_bi3; ?>" required />
        </div>
      </div>

      <div class="col-md-5">
        <label for="bv_near_bo" class="form-label">BO :</label>
        <div class="input-group mb-3">
          <input type="text" name="bv_near_bo1" id="bv_near_bo" class="form-control" value="<?php echo $bv_near_bo1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_near_bo2" id="bv_near_bo" class="form-control" value="<?php echo $bv_near_bo2; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_near_bo3" id="bv_near_bo" class="form-control" value="<?php echo $bv_near_bo3; ?>" required />
        </div>
      </div>

      <label for="" class="form-label col-md-2">Phoria :</label>
      <div class="col-md-10">
        <label for="bv_near_vertical" class="form-label">Vertical :</label>
        <input type="text" name="bv_near_vertical" id="bv_near_vertical" class="form-control" value="<?php echo $bv_near_vertical; ?>" required />
      </div>

      <label for="" class="form-label col-md-2">Vergence :</label>
      <div class="col-md-5">
        <label for="bv_near_supra" class="form-label">Supra :</label>
        <div class="input-group">
          <input type="text" name="bv_near_supra1" id="bv_near_supra" class="form-control" value="<?php echo $bv_near_supra1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_near_supra2" id="bv_near_supra" class="form-control" value="<?php echo $bv_near_supra2; ?>" required />
        </div>
      </div>
      <div class="col-md-5">
        <label for="bv_near_infra" class="form-label">Infra :</label>
        <div class="input-group">
          <input type="text" name="bv_near_infra1" id="bv_near_infra" class="form-control" value="<?php echo $bv_near_infra1; ?>" required />
          <span class="input-group-text">/</span>
          <input type="text" name="bv_near_infra2" id="bv_near_infra" class="form-control" value="<?php echo $bv_near_infra2; ?>" required />
        </div>
      </div>
    </div>

    <hr class="my-4" />
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="" class="form-label"
          >On :
          <input 
            type="radio" 
            name="bv_cal_radio" 
            id="bv_cal_radio1" 
            class="form-check-input" 
            value="BVA" 
            required 
            <?php echo ($bv_cal_radio == 'BVA' ? 'checked' : ''); ?>
          />
          <label for="bv_cal_radio1" class="form-check-label">BVA &nbsp;</label>
          <input 
            class="form-check-input" 
            type="radio" 
            name="bv_cal_radio" 
            id="bv_cal_radio2" 
            value="BCC" 
            <?php echo ($bv_cal_radio == 'BCC' ? 'checked' : ''); ?>
          />
          <label class="form-check-label" for="bv_cal_radio2"> BCC </label>
        </label>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="bv_cal_nra" class="form-label">NRA :</label>
        <div class="input-group mb-3">
          <input type="text" name="bv_cal_nra" id="bv_cal_nra" class="form-control" value="<?php echo $bv_cal_nra; ?>" required />
          <span class="input-group-text">D</span>
        </div>
      </div>
      <div class="col-md-4">
        <label for="bv_cal_pra" class="form-label">PRA :</label>
        <div class="input-group mb-3">
          <input type="text" name="bv_cal_pra" id="bv_cal_pra" class="form-control" value="<?php echo $bv_cal_pra; ?>" required />
          <span class="input-group-text">D</span>
        </div>
      </div>
      <div class="col-md-4">
        <label for="bv_cal_bcc" class="form-label">BCC :</label>
        <div class="input-group mb-3">
          <input type="text" name="bv_cal_bcc" id="bv_cal_bcc" class="form-control" value="<?php echo $bv_cal_bcc; ?>" required />
          <span class="input-group-text">D</span>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="bv_cal_gradients" class="form-label">Gradients (+1.00/-1.00) :</label>
        <div class="input-group mb-3">
          <input type="text" name="bv_cal_gradients" id="bv_cal_gradients" class="form-control" value="<?php echo $bv_cal_gradients; ?>" required />
        </div>
      </div>
      <div class="col-md-4">
        <label for="bv_cal_calculate_aca" class="form-label">Calculate AC/A :</label>
        <div class="input-group mb-3">
          <input type="text" name="bv_cal_calculate_aca" id="bv_cal_calculate_aca" class="form-control" value="<?php echo $bv_cal_calculate_aca; ?>" required />
        </div>
      </div>
      <div class="col-md-4">
        <label for="bv_cal_calculate" class="form-label"><b>(คำนวณ)</b></label>
        <div class="input-group mb-3">
          <input type="text" name="bv_cal_calculate" id="bv_cal_calculate" class="form-control" value="<?php echo $bv_cal_calculate; ?>" required />
        </div>
      </div>
    </div>

    <hr class="my-4" />

    <div class="row align-items-center gy-3 mb-3">
      <div class="col-12">
        <p class="mb-0">Accommodative Facility :</p>
      </div>
      <label for="bv_af_od" class="form-label col-3 col-md-2">OD :</label>
      <div class="col-9 col-md-4">
        <div class="input-group">
          <input type="text" name="bv_af_od" id="bv_af_od" class="form-control" value="<?php echo $bv_af_od; ?>" required />
          <span class="input-group-text">cpm.</span>
        </div>
      </div>
      <label for="bv_af_os" class="form-label col-3 col-md-2">OS :</label>
      <div class="col-9 col-md-4">
        <div class="input-group">
          <input type="text" name="bv_af_os" id="bv_af_os" class="form-control" value="<?php echo $bv_af_os; ?>" required />
          <span class="input-group-text">cpm.</span>
        </div>
      </div>
      <label for="bv_af_ou" class="form-label col-3 col-md-2">OU :</label>
      <div class="col-9 col-md-4">
        <div class="input-group">
          <input type="text" name="bv_af_ou" id="bv_af_ou" class="form-control" value="<?php echo $bv_af_ou; ?>" required />
          <span class="input-group-text">cpm.</span>
        </div>
      </div>
      <label for="bv_af_method" class="form-label col-3 col-md-2">Method :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="bv_af_method" id="bv_af_method" class="form-control" value="<?php echo $bv_af_method; ?>" required />
      </div>

      <div class="col-12">
        <p class="mb-0">Vergence Facility :</p>
      </div>

      <label for="bv_vf_ou" class="form-label col-3 col-md-2">OU :</label>
      <div class="col-9 col-md-4">
        <div class="input-group">
          <input type="text" name="bv_vf_ou" id="bv_vf_ou" class="form-control" value="<?php echo $bv_vf_ou; ?>" required />
          <span class="input-group-text">cpm.</span>
        </div>
      </div>

      <label for="bv_vf_method" class="form-label col-3 col-md-2">Method :</label>
      <div class="col-9 col-md-4">
        <input type="text" name="bv_vf_method" id="bv_vf_method" class="form-control" value="<?php echo $bv_vf_method; ?>" required />
      </div>

      <div class="col-12">
        <label for="bv_maddox" class="form-label">Maddox Rod :</label>
        <input type="text" name="bv_maddox" id="bv_maddox" class="form-control" value="<?php echo $bv_maddox; ?>" required />
      </div>

      <div class="col-12">
        <label for="bv_assoiate" class="form-label">Associate Phoria :</label>
        <input type="text" name="bv_assoiate" id="bv_assoiate" class="form-control" value="<?php echo $bv_assoiate; ?>" required />
      </div>

      <div class="col-12">
        <label for="bv_prd" class="form-label fw-bold">Preferred reading distance :</label>
        <div class="input-group">
          <input type="text" name="bv_prd" id="bv_prd" class="form-control" value="<?php echo $bv_prd; ?>" required />
          <span class="input-group-text">cm.</span>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <label for="bv_ta" class="form-label fw-bold">Tentative add :</label>
        <div class="input-group">
          <input type="text" name="bv_ta" id="bv_ta" class="form-control" value="<?php echo $bv_ta; ?>" required />
          <span class="input-group-text">D</span>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <label for="bv_ta_rang" class="form-label">Range :</label>
        <div class="input-group">
          <input type="text" name="bv_ta_rang1" id="bv_ta_rang" class="form-control" value="<?php echo $bv_ta_rang1; ?>" required />
          <span class="input-group-text">to</span>
          <input type="text" name="bv_ta_rang2" id="bv_ta_rang" class="form-control" value="<?php echo $bv_ta_rang2; ?>" required />
          <span class="input-group-text">cm.</span>
        </div>
      </div>
    </div>

    <hr class="my-4" />

    <label for="at_text" class="form-label"><b>Additional Test :</b></label>
    <div class="col-sm-12">
      <textarea class="form-control" required rows="4" name="at_text" id="at_text"><?php echo $at_text; ?></textarea>
    </div>
  </div>
</div>
