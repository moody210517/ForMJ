
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title" >
                        <i class="entypo-plus-circled"></i>
                        <?php echo get_phrase('add'); ?>
                    </div>
                </div>
                <div class="panel-body">

                    <?php echo form_open_multipart('admin/basic_time_schedule/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => "multipart/form-data")); ?>


                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('select tour name'); ?></label>
                        <div class="col-sm-5">

                            <select id="tour_id" name="tour_id" class="form-control" required data-validate="required" data-message-required="<?php echo get_phrase('value_required'); ?>" >											
                                <?php
                                $semesters = $this->db->get_where('tour', array('provider_id' => $this->session->userdata('admin_id')))->result_array();
                                foreach ($semesters as $row1):
                                    ?>
                                    <option value="<?php echo $row1['id']; ?>" selected >
                                    <?php echo $row1['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('start_time'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control timepicker" id="startTime" name="startTime" value="" required data-validate="required" data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('end_time'); ?></label>										
                        <div class="col-sm-5">
                            <input type="text" class="form-control timepicker" id="endTime" name="endTime" value="" required data-validate="required" data-message-required="<?php echo get_phrase('value_required'); ?>" value="" autofocus>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('week of day'); ?></label>
                        <div class="col-sm-5">
                            <select id="weekofday" name="weekofday" class="form-control" required data-validate="required" data-message-required="<?php echo get_phrase('value_required'); ?>" >											                                
                                <option value="1" selected >Monday</option>
                                <option value="2" selected >Tuesday</option>
                                <option value="3" selected >Wednesday</option>
                                <option value="4" selected >Thursday</option>
                                <option value="5" selected >Friday</option>
                                <option value="6" selected >Saturday</option>
                                <option value="0" selected >Sunday</option>
                            </select>
                        </div>
                    </div>
                    
  
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-info"><?php echo get_phrase('add_time_schedule'); ?></button>
                        </div>
                    </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</body>

<script src="<?php echo base_url('assets/js/bootstrap-timepicker.min.js'); ?>"></script>
<script>
    $('#startTime').timepicker({ 'scrollDefault': 'now' });
    $('#endTime').timepicker({ 'scrollDefault': 'now' });
</script>

