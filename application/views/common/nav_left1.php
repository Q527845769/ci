
<ul class="nav nav-list">
    <?php foreach ($systemconfig as $k1 => $row1) { 
        if(isset($row1["child"])) {
            $child_num = count($row1["child"]);
            $num = 0;
            foreach ($row1["child"] as $k2 => $row2) { 
                $usernamex =$this->SMC_NO3_YG;
                $keyx = $row2["ns"];
                if( @$menucheck[$keyx][$usernamex] !=1) {
                    $num += 1;
                }
            }
            
            if($child_num == $num) continue;
        }  

        ?>
                
        <li class="<?php if ($choose['father'] == $k1) echo 'active open'; ?>">
            <a href="<?php echo $row1['url'] ?>" class="<?php if($row1['url'] == '#'){ echo 'dropdown-toggle';}?>">
                <i class="<?php echo  $row1['cls'] ?>"></i>
                <span class="menu-text"> <?php echo $k1 ?> </span>

                <b class="arrow icon-angle-down"></b>
            </a>
            
            <ul class="submenu">
                <?php foreach ($row1["child"] as $k2 => $row2) {                 
                   $usernamex =$this->SMC_NO3_YG;
                   $keyx = $row2["ns"];
                  if( $menucheck[$keyx][$usernamex] !=1)continue;
                ?>
                 
                    <li class="<?php if ($choose['child'] == $row2['name']) echo 'active'; ?>">
                        <a href="<?php echo  $row2['url'] ?>">
                            <i class="<?php echo  $row2['cls'] ?>"></i>
                            <?php echo $row2["name"] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </li>

    <?php } ?>

</ul><!-- /.nav-list -->