<?php if (!empty($bar_numbers)) : ?> 

    <h5>Associated bar numbers:</h5>
    
    <table class="table table-striped table-bordered">

    <?php foreach ($bar_numbers as $key => $meta) : ?> 

        <?php foreach ($meta as $title => $metum) : ?> 

            <?php if (!empty($metum['value'])) : ?>
        <tr>
            <td>
                <?php echo $metum['value']; ?>
            </td>
        </tr>
            <?php endif; ?> 

        <?php endforeach; ?> 

    <?php endforeach; ?> 
           
    </table>
    
    <hr />
    
<?php endif; ?> 