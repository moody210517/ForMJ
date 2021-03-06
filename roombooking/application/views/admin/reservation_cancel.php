<!--<a href="<?php echo site_url('admin/add_reservation');?>" onclick="" class="btn btn-primary pull-right">
    <i class="entypo-plus-circled"></i>
<?php echo get_phrase('Add Booking'); ?>
</a> -->


<br><br>
<table class="table table-bordered datatable" id="table_export">
    <thead>
        <tr>
            <!--<th><div><?php echo get_phrase('User Name'); ?></div></th>-->
            <th><div><?php echo get_phrase('User Email'); ?></div></th>
            <th><div><?php echo get_phrase('User Phone'); ?></div></th> 
            <th><div><?php echo get_phrase('Tour Name'); ?></div></th>
            <th><div><?php echo get_phrase('Ticket Count'); ?></div></th>
            <th><div><?php echo get_phrase('Date'); ?></div></th>			
            <th><div><?php echo get_phrase('Time'); ?></div></th>            
<!--            <th><div><?php echo get_phrase('Rsv Type'); ?></div></th> -->
            <th><div><?php echo get_phrase('Status'); ?></div></th>   
            <th><div><?php echo get_phrase('options'); ?></div></th>
        </tr>
    </thead>

<tbody>
    <?php
    
    
        
    foreach ($hours as $row):
        ?>
        <tr>              
            <!--<td><?php echo $this->db->get_where('usertable', array('no' => $row['user_id']))->row()->name; ?></td>-->
            <td><?php echo $this->db->get_where('usertable', array('no' => $row['user_id']))->row()->email; ?></td>
            <td><?php echo $this->db->get_where('usertable', array('no' => $row['user_id']))->row()->phone; ?></td>
            <td><?php echo $this->db->get_where('room', array('id' => $row['tour_id']))->row()->name; ?></td>
            <td><?php echo $row['ticket_count']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>                        

           
            
            <td>
                <div class="btn-group">
                    <button type="button" class="btn <?php echo $this->db->get_where('order_state', array('id'=>$row['state']))->row()->button; ?> btn-sm dropdown-toggle" data-toggle="dropdown" >              
                    <?php echo $this->db->get_where('order_state', array('id'=>$row['state']))->row()->name; ?>
                    </button>
                </div>
            </td>
            
   
            
            
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>                    
                   
                            <!-- EDITING LINK -->                            
                       
                             <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                             <li>
                                <a href="<?php echo site_url('admin/refund/'.$row['id'])?>" onclick="">
                                    <i class="entypo-pencil"></i>
                                    <?php echo get_phrase('cancel'); ?>
                                </a>
                            </li> 
                        
                          
                                              
                    </ul>                                        
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>


<script>
    
    $(document).ready(function() {
    $('#table_export').DataTable( {
        "order": [[ 0, "asc" ]]
    } );
} );
</script>