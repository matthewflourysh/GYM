<?php

/* MAIN CONFIGURATION START */


function printclasslists_perm() {
    return array('administer printclasslists','administer printmembers', 'administer printcoaches', 'administer myclasslist');
}

function printclasslists_menu() {
    $items = array();
    $items['capturecoachcriteriasave'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'capturecoachcriteriasave',
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    $items['capturecoachcriteria'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'capturecoachcriteria',
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    $items['capturecoachcriteria/%'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'capturecoachcriteriastart',
        'access arguments' => array('administer printclasslists'),
        'page arguments' => array(1),
        'type' => MENU_CALLBACK
    );
    $items['capturecriteria'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'capturecriteria',
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    $items['capturecriteria/%'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'capturecriteriastart',
        'page arguments' => array(1),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    $items['capturecriteriasave'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'capturecriteriasave',
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    $items['capturecriterialist'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'capturecriterialist',
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    $items['printclasslists'] = array(
        'title' => 'Print Class Lists',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'printclasslists_capture',
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
	$items['printmembers/%/%'] = array(
        'title' => 'Print Class Lists',
        'page callback' => 'printmembers',
		'page arguments' => array(1,2),
        'access arguments' => array('administer printmembers'),
        'type' => MENU_CALLBACK
    );
	$items['printcoaches/%/%'] = array(
        'title' => 'Print Class List per Coach',
        'page callback' => 'printcoach',
		'page arguments' => array(1,2),
        'access arguments' => array('administer printcoaches'),
        'type' => MENU_CALLBACK
    );
	$items['coachclass/%'] = array(
        'title' => 'My Class List',
        'page callback' => 'coachclass',
        'page arguments' => array(1),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
    );

    $items['coachclass_save'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'coachclass_save',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
	);  
	
	$items['groupclass_save'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'groupclass_save',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
	); 
	
	$items['coachclass_save_time'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'coachclass_save_time',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
	); 
	
	$items['coachclass_save_class_length'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'coachclass_save_class_length',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
	);

	$items['progress_report_comment_save'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'printclasslists_progress_report_comment_save',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
	); 	
    
	$items['addmoregymnast'] = array(
        'title' => 'Select More Gymnast',
        'page callback' => 'addmoregymnast',
		'page arguments' => array(),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
    );
	$items['savetotrack'] = array(
        'title' => '',
        'page callback' => 'savetotrack',
		'page arguments' => array(),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
    );
        $items['printclasslists/%/%/2016-02-26'] = array(
        'title' => 'Print TID Class Lists',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'printclasslists_TID',
        'page arguments' => array(1, 2),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
        $items['weekly_gymnasts/%'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'weekly_gymnasts_all_badges',
        'page arguments' => array(1),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    ); 
        $items['weekly_gymnasts'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'weekly_gymnasts',
        'page arguments' => array(1),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );   
    
		$items['weekly_gymnasts/%/%/save'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'weekly_gymnasts_save',
        'page arguments' => array(3),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    
    $items['attendance_register'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'printclasslists_attendance_register_redirect',
        'page arguments' => array(1),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    );
    
    $items['attendance_register/%'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'printclasslists_attendance_register',
        'page arguments' => array(1),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
    ); 
    
    $items['attendance_register/%/%/%/save'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'attendance_register_save',
        'page arguments' => array(4),
        'access arguments' => array('administer printclasslists'),
        'type' => MENU_CALLBACK
	);  
	
	$items['attendance_register_class_save_time_coach_admin'] = array(
        'title' => '',            
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'attendance_register_save_coach_admin',
        'page arguments' => array(4),
        'access arguments' => array('administer progresstracker'),
        'type' => MENU_CALLBACK
	);   
	
	     
  
	$items['captureprogress'] = array(
    	'title' => 'Update Progress Reports',
    	'page callback' => 'printclasslists_progresstracker_capture_ajax',
    	'access arguments' => array('administer progresstracker'),
    	'type' => MENU_NORMAL_ITEM
  	);  
  
    $items['captureprogress/%/%'] = array(
    	'title' => 'Update Progress Reports',
    	'page callback' => 'printclasslists_progresstracker_capture_ajax',
    	'access arguments' => array('administer progresstracker'),
    	'page arguments' => array(2),
    	'type' => MENU_NORMAL_ITEM
  	);
    $items['gymcoachcompetency_save'] = array(
        'title' => '',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'gymcoachcompetency_save',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
    );
    $items['getcriteriaforcoaches'] = array(
        'title' => '',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'getcriteriaforcoaches',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
    );
    $items['save_gymbadge_criteria'] = array(
        'title' => '',
        'description' => 'This page is accessible to authenticated users only',
        'page callback' => 'save_gymbadge_criteria',
        'page arguments' => array(0),
        'access arguments' => array('administer myclasslist'),
        'type' => MENU_CALLBACK
    );

    return $items;
}

function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}
function capturecoachcriteriasave() {
    var_dump($_POST);
    $a = db_query("SELECT * FROM {_criteriapercoach} WHERE coachid = '%s' AND badge = '%s'",$_POST['uid'],$_POST['badge']);
    $flag = false;
    while($row = db_fetch_object($a)) {
        $flag = true;
        if($flag == true) {
            $sql = db_query("UPDATE {_criteriapercoach} SET criteria = '". $_POST['criteria']."' WHERE (badge = '".$_POST['badge']."')AND (coachid = '".$_POST['uid']."')");
            echo 'SQL:UPDATE <br/>'.$sql;
        }
    }
    if($flag == false) {
         $sql = db_query("INSERT INTO {_criteriapercoach} (criteria,coachid,badge) VALUES('%s','%s','%s')", $_POST['criteria'], $_POST['uid'], $_POST['badge']);
         echo 'SQL:INSERT <br/>';
    }


}
function capturecoachcriteria() {
    $output = <<<AAA
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(ff) {
        $("#gotoclass").on("click", function() {
            var navto = $("#capturecriteriafor option:selected").val();
            alert(navto);
            window.location.href ='/capturecoachcriteria/'+navto; 
            
        });
    });
    
</script>
    <div>
        <div>
            <select id="capturecriteriafor">
                <option value="FUN-Badge 0">Busters 0</option>
                <option value="FUN-Badge 1">Busters 1</option>
                <option value="FUN-Badge 2">Busters 2</option>
                <option value="GYM-Badge 1">Skilz 1</option>
                <option value="GYM-Badge 2">Skilz 2</option>
            </select>
        </div>
        <div>
            <input type="button" value="Go to Criteria" id="gotoclass">
        </div>
    </div>

AAA;

    return $output;
}
function capturecoachcriteriastart() {
    $badge = arg(1);

    $sql = "select u.uid from users u, users_roles ur where u.uid= ur.uid and u.status=1 and ur.rid=14";
    $result = db_query($sql);
    $clist = "";
    $output = <<<AAA
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(ff) {
        $("#savebutton").on("click", function() {
            $(".coachcriteria").each(function(f){
                var criteria = $(this).find(".criteria").val();
                var uid = $(this).find(".uid").val();
                var badge = $(this).find(".badge").val();
                $.post("/capturecoachcriteriasave",{"criteria":criteria,"uid":uid,"badge":badge}, function(a) {
                    $("#savemessage").text("Criteria has been saved for coaches under {$badge}");
                    setTimeout(function(aaaa) {
                        $("#savemessage").text("");
                    },2000);
                })    
            });
            
        });
    });
    </script>
AAA;
    $clist .= $output;

    if ($result)
    {
        while($row = db_fetch_array($result)) {
            $u = user_load($row['uid']);
            profile_load_profile($u);
            $sql = db_query("SELECT * FROM _criteriapercoach WHERE coachid = '".$row['uid']."' AND badge = '".$badge."'");
            $criteriadata = "";
            while($res = db_fetch_object($sql)) {
                $criteriadata = $res->criteria;
            }
            if($criteriadata == 0) {
                $criteriadata = "";
            }
            
            $clist .= '<div class="coachcriteria" style="margin-bottom: 1px;background-color: aliceblue;padding: 2px;"><input class="badge" type="hidden" value="'.$badge.'"><input class="uid" type="hidden" value="'.$u->uid.'"><div style="width:141px;float: left;padding: 4px;"">'.$u->profile_last_name." ".$u->profile_first_name.'</div><input  style="width: 253px;padding: 2px;" type="text" class="criteria" value="'.$criteriadata.'"></div>';
        }
    }
    $clist .= '<div style="margin-bottom: 1px;background-color: aliceblue;padding: 2px;"><input id="savebutton" type="button" value="Save" style="float: right;padding: 5px 10px;"><div style="clear:both"></div> </div>';
    $clist .= '<div id="savemessage" style="margin-bottom: 1px;;padding: 2px; color: Red;"></div>';
    $text = '<p>Please capture the criteria per coach for '.$badge.' <br/>(Please separate criteria by using a space e.g (1 5 10)</p><br/>';
    return $text.$clist;


}
function capturecriteria() {

    $output = <<<AAA
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(ff) {
        $("#gotoclass").on("click", function() {
            var navto = $("#capturecriteriafor option:selected").val();
            alert(navto);
            window.location.href ='/capturecriteria/'+navto; 
            
        });
    });
    
</script>
    <div>
        <div>
            <select id="capturecriteriafor">
                <option value="FUN-Badge 0">Busters 0</option>
                <option value="FUN-Badge 1">Busters 1</option>
                <option value="FUN-Badge 2">Busters 2</option>
                <option value="GYM-Badge 1">Skilz 1</option>
                <option value="GYM-Badge 2">Skilz 2</option>
            </select>
        </div>
        <div>
            <input type="button" value="Go to Criteria" id="gotoclass">
        </div>
    </div>

AAA;

return $output;
}
function capturecriteriastart() {
    $badge = arg(1);

    $output = <<<AAA
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(ff) {
        var badge = $("#badge").val();
        $.post("/capturecriterialist",{"badge":badge}, function(a) {
                $("#criterialist").html(a);
        });   
        
        $("#save").on("click", function() {
            var level = $("#level option:selected").val();
            var criterianame = $("#criterianame").val();
            var badge = $("#badge").val();
            alert(level + " | " + criterianame  + " | " + badge);
            $.post("/capturecriteriasave",{"level":level,"criterianame":criterianame,"badge":badge}, function(a) {
                $("#message").text("Saved");
                $("#messagebox").css("display","block");
                 $.post("/capturecriterialist",{"badge":badge}, function(a) {
                    $("#criterialist").html(a);
                }); 
                setTimeout(function(fff){
                    $("#messagebox").css("display","none");
                    $("#message").text("");
                     $("#criterianame").val("");
                },2000)
            });
        });
    });
    
</script>
    <div>
    <p>This is where you will add criteria for {$badge}</p>
        <div style="float: left;margin-right: 10px;">
            <select style="padding: 4px;" id="level">
                <option value="Required">Required</option>
                <option value="Advacned">Advanced</option>
            </select>
        </div>
        <div style="float: left;">
            <input  style="width: 500px;padding: 4px;" type="text" placeholder="Criteria Name" id="criterianame">
        </div>
        <div>
            <input type="hidden" value="{$badge}" id="badge">
        </div>
        <div>
            <input style="float:right;padding: 4px;" type="button" value="Save" id="save">
        </div>
        <div style="clear: both;"></div>
        <div style="padding: 4px;color: #000;background-color: #f07b7b;margin-top: 5px; display: none" id="messagebox">
            <span id="message"></span>
        </div>
    </div>
    <div id="criterialist" style="padding: 10px;">
    
</div>

AAA;

    return $output;



}
function capturecriteriasave() {
    var_dump($_POST);

    $cid = 1;

    $res = db_query("SELECT * FROM {_criteriaperbadge} WHERE badge = '%s'",$_POST['badge']);
    while($row = db_fetch_object($res)) {
        $cid = $row->cid + 1;
    }
    $sql = db_query("INSERT INTO {_criteriaperbadge} (cid,criteria_name,level,badge) VALUES('%s','%s','%s','%s')",$cid,$_POST['criterianame'],$_POST['level'],$_POST['badge']);
    echo $sql;

}
function capturecriterialist() {
    $res = db_query("SELECT * FROM {_criteriaperbadge} WHERE badge = '%s'",$_POST['badge']);
    while($row = db_fetch_object($res)) {

        echo '<div style="margin-bottom: 1px;" >';
            echo '<div style="float: left;padding: 10px;margin-right: 1px;background-color: aliceblue;">' . $row->cid . '</div>';
            echo '<div style="padding: 10px;margin-right: 1px;background-color: #eaeaea;float: left;">' . $row->level . '</div>';
            echo '<div style="padding: 10px; float: left;background-color: #d4d4d4;width: 85%;">' . $row->criteria_name . '</div>';
            echo '<div style="clear:both"></div>';
        echo '</div>';

    }
}

function printclasslists_get_div_competency_evaluations ($arr, $heading) {
	
	$return .= '<h3>'.$heading.'</h3>';
	$return .= "<p>Click on a badge below:</p>";
	
	$return .= "<div class=competency_evaluations>";
	$return .= "<div class='gymnast_header'>
					<div class='gymnast_name'>Gymnast Name</div>
					<div class='ce_current_badge'>Badge Awarded</div>
					<div class='current_badge'>Badge with Competencies</div>
				</div>";
	
	$return .= "<div class='coachlist'>";
	
	$counter = 0;
	foreach ($arr as $key=>$a) {
		/*if ($a ['badge_details'] ['current_text'] AND $a ['badge_details'] ['current_text'] != "1" ) {
			$current_badge = $a ['badge_details'] ['current_text'];
		} else {
			$current_badge = "";
		}*/
		$current_badge = $a ['badge_details']['current_progress'];
		
		$evaluate_badge = gym_badge_get_badge ($a ['badge_ready_for_evaluation']);
	
		$counter ++;
		
		if ($counter % 2 == 0) {
            $sclass = 'even ';
        } else {
            $sclass = 'odd ';
        }
		
		$return .= "<div class='gymnast_row gymnast_".$sclass."'>";
		$return .=		"<div class=gymnast_name>".strtoupper($a['last_name']).", ".$a['first_name']."</div>";
		$return .=		"<div class=ce_current_badge>".$current_badge."</div>";
		//$return .= 		"<div class=time_left_early >".$a ['badge_ready_for_evaluation']."</div>";
		$return .=		 '<div class=current_badge_text>';
		$url = '/diarygymbadge/'.$key.'/'.$a ['badge_ready_for_evaluation'].'/'.$a['gymnast_gender'];
		//print $url."<br />";
		$return .= 		"<a href='$url' target=_blank class='badgeletter'>".$evaluate_badge.'</a></div>';
		$return .= "</div>";
		//print "<pre>";
		//print_r ($a);
		//print "</pre>";
	}
	
	$return .= "</div>";
	$return .= "</div>";
	return $return;
}

function printclasslists_get_pending_competency_and_evaluations_for_admin_approval () {
	/* Get a list of gymnasts who have a value of 16 or higher for any of the GYM totals in gym_diary_total	*/

	$query = "SELECT * 
FROM  `gym_diary_total` 
WHERE  `G` >=16
OR  `Y` >=16
OR  `M` >=16
OR  `G_advanced` >=16
OR  `Y_advanced` >=16
OR  `M_advanced` >=16
OR  `G_admin` >=16
OR  `Y_admin` >=16
OR  `M_admin` >=16
OR  `G_admin_advanced` >=16
OR  `Y_admin_advanced` >=16
OR  `M_admin_advanced` >=16;";

	$result = db_query ($query);
	$counter = 0;
	$badge_letter_array = array ('M', 'Y', 'G');
	
	while ($row = db_fetch_object ($result) ) {
		
		// get the current badge for the gymnast
		$badge_details = gym_badge_get_badge_student ($row->uid);
		
		if ($badge_details['current_text']) {
		}else {
			$badge_details['current_text'] = '1'; // set a blank badge if gymnast has no badge
		}
		
		if ($badge_details ['current_text'] == 'M') {
			// gymnast has achieved the last badge 'M'
		}else {
			// check which gymnasts are ready for Badge evaluation
			
			foreach ($badge_letter_array as $b) {
				$field_badge_admin = $b."_admin";
				$field_badge_admin_advanced = $b."_admin_advanced";
			
				if ( ($row->$field_badge_admin >= 16 OR $row->$field_badge_admin_advanced >= 16) AND $badge_details['current_text'] != $b) {
					// gymnast is ready for the '$b' Badge evalation
			
					$c = user_load($row->uid);
					profile_load_profile($c);
					
					
					if ($c->profile_gymnast_gender == 'Male') {
						$gender = 'boys';
					} else {
						$gender = 'girls';
					}
				
					
					$evaluation [$row->uid]['last_name'] = $c->profile_last_name;
					$evaluation [$row->uid]['first_name'] = $c->profile_first_name;
					$evaluation [$row->uid]['gymnast_gender'] = $gender;
					$evaluation [$row->uid]['badge_ready_for_evaluation'] = $b;
					$evaluation [$row->uid]['badge_details'] = $badge_details;
				
					$counter ++;
					break; //exit out of the foreach loop, we only want the 'highest' badge
				}
			}
			
			// check which gymnasts are ready for competency to be checked by admin
			
			
			foreach ($badge_letter_array as $b) {
				$field_badge_advanced = $b."_advanced";
				$field_badge_admin = $b."_admin";
				$field_badge_admin_advanced = $b."_admin_advanced";

				
				
				if ( ($row->{$b} >= 16 OR $row->$field_badge_advanced >= 16) AND $badge_details['current_text'] != $b AND $row->$field_badge_admin < 16 AND $row->$field_badge_admin_advanced < 16) {
					// gymnast is ready for admin to check competencies for $b badge
					// once the admin has checked off the 16 criteria for the badge or for
					// the advanced badge then the badge is ready for evaluation

					$c = user_load($row->uid);
					profile_load_profile($c);
					
					if ($c->profile_gymnast_gender == 'Male') {
						$gender = 'boys';
					} else {
						$gender = 'girls';
					}

					
					$competency [$row->uid]['last_name'] = $c->profile_last_name;
					$competency [$row->uid]['first_name'] = $c->profile_first_name;
					$competency [$row->uid]['gymnast_gender'] = $gender;
					$competency [$row->uid]['badge_ready_for_evaluation'] = $b;
					$competency [$row->uid]['badge_details'] = $badge_details;
				
					$counter ++;
					break; //exit out of the foreach loop, we only want the 'highest' badge
				}
			}
			
				
		}
	}
		
	
		//print "Evaluation:<pre>";
		//print_r ($evaluation);
		//print "</pre>";
		

		
	$evaluation = array_sort($evaluation, 'last_name');	
	$competency = array_sort($competency, 'last_name');

	
	/*print "Evaluation:<pre>";
	print_r ($competency);
	print "</pre>";*/
	
	if ($counter > 0) {
		if (is_array ($competency) AND sizeof($competency) > 0) {
			$return .= printclasslists_get_div_competency_evaluations ($competency, "Competencies below Require Admin Approval");
		}
		
		if (is_array ($evaluation) AND sizeof($evaluation) > 0) {
			$return .= printclasslists_get_div_competency_evaluations ($evaluation, "Gymnasts ready for Badge Evaluation");
		}
	}else {
		$return = "Currently no gymnasts awaiting approval";
	}
	
	return $return;
}

function printclasslists_get_pending_badge_for_admin_approval () {
	$pr .= '<script>
$(document).ready(function(){
    $(".h2_badge_approval_list").click(function(){
        $(".badge_approval_list_inner").toggle(500);
    });
});
</script>';

	$pr .= "<div class='badge_approval_list'>";
	$pr .= "<h2 class='h2_badge_approval_list'>Badges: Gymnasts ready for Admin competency 'check' & Badge Evaluation</h2>";
	$pr .= "<div class='badge_approval_list_inner'>";	  				
	$pr .= printclasslists_get_pending_competency_and_evaluations_for_admin_approval ();
	$pr .= "</div>";
	$pr .= "</div>";
	
	return $pr;
}

/* display a list of the stations and groups for the coach to select */ 
function progresstracker_get_coach_fun_capture ($reportdate, $year, $progress_report_id, $classid, $class, $uid, $role_id, $day, $weekno, $class_start_time, $class_length) {
	
	global $user;

    // check if a group / station have been selected
    // if not display drop downs


    // check if a group / station have been selected
		// if not display drop downs
		
		$nobj = node_load($progress_report_id);
		
		$title = 'Capture '.$class.' results for Gymnasts ('.
		date('l dS F Y',strtotime($reportdate)).'-'.$nobj->field_pr_c_quarter[0]['value'].')';
		drupal_set_title($title);
		
		
		
		if ( is_numeric ($_POST ['group']) ) {
			// display criteria allocated to this coach for sign off
			$return .= "<h4><b>Group Selected:</b> ".$_POST ['group']."</h4><br />";

            $query = "SELECT * from coach_competency_allocation WHERE coach_id = '%s' ORDER  BY cccid DESC LIMIT 1";
			
			$result = db_query ($query, $user->uid);
			$counter = 0;
			while ($row = db_fetch_object ($result) ) {

			    //var_dump($row);
				$counter ++;
						
				// explode the criteria out
				
				$criteria_arraya = explode (" ", $row->competency);
				
				switch ($row->class) {
					case 'FUN-Badge 0':
						$badge = 'F';
						break;
					case 'FUN-Badge 1':
						$badge = 'U';
						break;
					case 'FUN-Badge 2':
						$badge = 'N';
						break;
					
				}
				
				// Fetch the criteria based on the class/badge
				
				foreach ($criteria_arraya as $c) {
							
					$query = "SELECT * from fun_criteria_new WHERE `criteria_no` = ".$c." AND `badge` = '".$badge."';"; 
					
					$fun_result = db_query ($query);
					
					//$counter = 0;
					
					while ($f_row = db_fetch_object ($fun_result) ) {		
						
						if ($f_row->gender == 'boys') {
							$style = 'boys';
						}else {
							$style = 'girls';
						}
							
						$return_criteria .= "<div class=$style>#".$c." ".$f_row->category . "</div>";
						$counter ++;
						
						$criteria_array [$f_row->fcid] ['gender'] = $f_row->gender;
						$criteria_array [$f_row->fcid] ['fcid'] = $f_row->fcid;
						$criteria_array [$f_row->fcid] ['criteria_no'] = $f_row->criteria_no;
					
					}
					
					if ($counter == 0) { // criteria not found
						$return_criteria .= "<div class=error>Criteria Number <b>$c</b> not found - contact Admin</div>";
					}
					
					$criteria_heading .= "<div class=criteria_count>$c</div>";
					
				}
			}
			
			
			if ($counter) {
				$return .= "<h4>The following Criteria have been allocated to you to evaluate for each gymnast for <b>$badge</b> Badge.  Each criteria has a basic (first check box) and advanced (second check box) version of the skill.</h4>";
				$return .= $return_criteria;
			}else {
				$return .= "<h4>No criteria have been allocated to you to evaluate - please contact coach admin.</h4>";
			}
			
			// display list of gymnasts in this group with:
			// Time arrived, Effort, Criteria allocated to this coach
			
    		$arr_students = progresstracker_return_users ($key, FALSE, $day, $break);
			$pnode = node_load ($progress_report_id);
$cnode = node_load (array ("nid"=>$pnode->field_pr_class[0]['nid']));
					
			// Get all the attendance and progress marks and store in an array for this progress report
					
			//$class_attendance = progresstracker_get_attendance_progress (arg(1), $roleid);
			
			$date = date('Y-m-d');
			$pnode = node_load ($progress_report_id);
			$cnode = node_load (array ("nid"=>$pnode->field_pr_class[0]['nid']));
			$fullday = date("l", strtotime($reportdate));
			
			$class_attendance = progresstracker_get_attendance_per_class ($year, $weekno, $date, $class, $role_id, $progress_report_id, $day);
					
			//$return .= drupal_get_form('progresstracker_capture_form', $attendanceprogress, $arr_students, $break, $pnode, $cnode, $roleid, $class_attendance);
    		
    		$return .= printclasslists_fun_coach_capture_skills ($user->uid, $criteria_heading, $criteria_array, $_POST ['group'], $class, $date, $year, $fullday, $day, $weekno, $attendanceprogress, $arr_students, $pnode, $cnode, $roleid, $class_attendance, $reportdate, $admin_override);
			
			// progresstracker_return_users_per_fun_group ($group_no, $year, $progress_report_id, $class_id, $role_id)
			
		}
		else {
			$return .= "<h3>Please select a group of gymnasts who have arrived at your station: </h3>";
		}
		
		$return .= '<div class="select_gymnasts">
			<h3>Select Group of Gymnasts:</h3>
			<form name="f1" id="f1" method="post" >
			<select name="group" class="select_group">
				<option value="">--Select Group--</option>';
				
				for ($x = 1; $x <= 10; $x++) {
					//$out .= $station['Group '.$x] = 'Group '.$x;
					$return .= '<option value="'.$x.'" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group '.$x.'</option>';
				}
			
			$return .='	
			
			</select>
			</div>
			<div class=go_select>
					<input class="manageresult_go" type="submit" name="sb" value="GO">
			</div>';
			
	return $return;
}

// get all the competencies that have been allocated to this coach
function printclasslists_fetch_coach_competencies ($progress_report_id, $classid) {
	
	$query = "SELECT * FROM coach_competency_allocation WHERE progress_report_id = '".$progress_report_id."' AND class_id = '".$classid."'";
	
	//print $query;
	
	$result = db_query ($query);
	
	while ($row = db_fetch_object ($result)) {
		$competency = str_replace (",", " ", $row->competency);
		$competency = str_replace ("  ", " ", $row->competency);
		$competency = str_replace ("  ", " ", $row->competency);
		$return [$row->coach_id] = $competency;
	}

	/*print "<pre>";
	print_r ($return);
	print "</pre>";*/
	
	return $return;
	
}

function printclasslists_progresstracker_capture_ajax () {

	global $user;

	if ($user->uid ==1) {
			$is_admin = true;	
	  } else {
			$is_admin = progresstracker_check_if_has_role ($user, 'admin');
			$is_coach_admin = progresstracker_check_if_has_role ($user, 'Coach Admin');
			$is_membership_manager = progresstracker_check_if_has_role ($user, 'Membership Manager');
			
			if ($is_admin OR $is_coach_admin OR $is_membership_manager) {
				$admin_override = true;
			}else $admin_override = false;
	  }

	$reportdate =  date('Y-m-d');
	 // $reportdate =  "2017-02-18"; //date('Y-m-d');
	  $date = $reportdate;
	  $badge = arg (2);
	  $class = str_replace("$"," ",$badge);
	  $year = date("Y", strtotime($reportdate));
      $fullday = date("l", strtotime($reportdate));        
      $day = strtolower($fullday);                          
      $weekno = get_week_num($reportdate);

	// get all the coaches:
	
	$progress_report = get_progress_report ($reportdate, $class);
	
	/*print "<pre>";
	print_r ($progress_report);
	print "</pre>";
	die;*/
	
	// role id is the corresponding drupal role which matches the 'class' eg GYM Badge 1
	$role_id = get_role_name ($class);
	
	// Get the corresponding class id, this the node id from the class node that has been created for this quarter eg 1st Quarter - GYM Badge 1 
	$temp_result = checkadmin($class, $reportdate);
	$classid = $temp_result ['cid'];
	
	if ($progress_report) {
		$progress_report_id = $progress_report['pid'];
	}else {
		drupal_set_message('No Class has been created for <b>'.$class.'</b> for this quarter.  Please contact the website administrator','error');
		drupal_goto("");
	} 
	
	$class_details = printclasslists_get_class_start_length ($classid, $day);
	
	// If not admin display a drop down to select station and group
	if (!$is_admin && !$admin_override) {
		$return .= progresstracker_get_coach_fun_capture ($reportdate, $year, $progress_report_id, $classid, $class, $user->uid, $role_id, $day, $weekno, $class_details->class_start_time, $class_details->class_length);
		
		return $return;
	}
	
	
	$query = 'SELECT u.uid, u.name ' .
       'FROM {users} AS u ' .
       'JOIN {users_roles} AS ur ' .
       'ON ur.uid = u.uid ' .       
       'WHERE ur.rid = 14' ;
    
       $res = db_query($query);
	   
	   $return .= progresstracker_get_javascript_fun_allocation ($reportdate, $year, $progress_report_id, $classid, $class, $user->uid, $role_id, $day, $weekno, $class_details->class_start_time, $class_details->class_length);
	   
	   //$return .= printclasslists_get_javascript_coach_capture_list ($reportdate, $year, $progress_report_id, $classid, $class, $user->uid, $role_id, $day, $weekno, false);

		// Fetch all competencies allocated to each coach
	
	   $coach_competency = printclasslists_fetch_coach_competencies ($progress_report_id, $classid);
	   
      
      
	  	$return .= '<script>
$(document).ready(function(){
    $(".h2_coach_competency_list").click(function(){
        $(".coach_competency_list_inner").toggle(500);
    });
});
</script>';

	$return .= "<div class='coach_competency_list'>";
        $return .= "<h2 class='h2_coach_competency_list'>Allocate competencies to coaches</h2>";
            $return .= "<div class='coach_competency_list_inner'>";
                $return .= "<h3>Allocate competencies to coaches, with a space (or comma) between each number eg 1 5 8</h3>";
                $return .= "<div class='gymnast_header'>
                            <div class='gymnast_name'>Coach Name</div>
                            <div class='ce_current_badge'>Competencies</div>
                            </div>";
                $return .= "<div class='coachlist'>";

	//$class_attendance = progresstracker_get_attendance_per_class ($year, $weekno, $date, $class, $role_id, $progress_report_id, $day);

            while($row = db_fetch_object ($res)){
                $uid = $row->uid;
                $return .= "<div class='gymnast_row gymnast_row_coach'>";
                $return .= 		"<div class='gymnast_name'>". $row->name."</div>";
                $return .= "<input type='text' name='competency_{$uid}' id='competency_{$uid}' width=20 value='".$coach_competency [$uid]."'/> &nbsp;
    <input type=\"button\" name=\"button_{$uid}\" id=\"button_{$uid}\" value=\"Save\" class='button_save' />";
                $return .= "</div>";
            }
            $return .= "</div>";
	  	$return .= "</div>";
	$return .= "</div>";
    
    $pnode = node_load ($progress_report_id);
$cnode = node_load (array ("nid"=>$pnode->field_pr_class[0]['nid']));
$day_of_the_week = date('l', strtotime(str_replace('T', ' ', $pnode->field_pr_date[0]['value'])));

$roles = user_roles (false);
				
				//print "type: ".$cnode->field_c_type[0]['value']. "<br />";
				
				foreach ($roles as $key=>$value) {
					//print "key: $key <br />";
					//print "value: $value <br />";
					
					if ($value == $cnode->field_c_type[0]['value']) {
						$roleid = $key;
						$rolevalue = $value;
						break;
					}
				}
				
$day = strtolower($day_of_the_week);
    
    		$arr_students = progresstracker_return_users ($key, FALSE, $day, $break);
					
					
		
			
			// Get all the attendance and progress marks and store in an array for this progress report
					
			//$class_attendance = progresstracker_get_attendance_progress (arg(1), $roleid);
			
			$class_attendance = progresstracker_get_attendance_per_class ($year, $weekno, $date, $class, $role_id, $progress_report_id, $day);
					
			//$return .= drupal_get_form('progresstracker_capture_form', $attendanceprogress, $arr_students, $break, $pnode, $cnode, $roleid, $class_attendance);
    		//XXX
    $badgetest = arg(2);
    		$return .= printclasslists_fun_admin_list ($user, $badgetest, $class, $date, $year, $fullday, $day, $weekno, $attendanceprogress, $arr_students, $pnode, $cnode, $roleid, $class_attendance, $reportdate, $admin_override);
    
    return $return;

}

//XXX
function printclasslists_fun_admin_list ($user, $badgetest, $class, $date, $year, $fullday, $day, $weekno, $attendanceprogress, $arr_students, $pnode, $cnode, $roleid, $class_attendance = array(), $reportdate, $admin_override ) {

//printclasslists_get_coach_capture_list ($class, $date, $year, $fullday, $day, $weekno, $role_id, $classid, $progress_report_id, $reportdate,$coachid, $show_coach_name = false, $admin_override = false, $is_GYM_BADGE = false, $admin_override = false)

	/*print "<pre>";
	print_r ($attendanceprogress);
	print "</pre>";*/
	
	//print "<pre>";
	//print_r ($class_attendance);
	//print "</pre>";
	
	$progress_report_id = arg(1);
	
	$is_FUN_BADGE = true;
	$is_GYM_BADGE = false;
	
	$badge_style = '_fun';


	//print "<pre>";
	//print_r ($cnode);
	//print "</pre>";
	
	$rid = progresstracker_extract_role_id ($cnode->field_c_type[0]['value']);
	
	$dt = date('Y-m-d',strtotime($pnode->field_pr_date[0]['value']));
	$actualbadge = $pnode->field_pr_c_type[0]['value'];
	$badge = str_replace('-',' ',$pnode->field_pr_c_type[0]['value']);

	$sql = "select * from station where class='".$pnode->field_pr_c_type[0]['value']."' and date like '".$dt."%'";
	
	$result = db_query($sql);
	
	$arr_students = printclasslists_return_users(null, $roleid, "", $day, &$break, $class, $date);
	
	/*print "$day<pre>";
	print_r ($arr_students);
	print "</pre>";*/
	
	// Get all the progress report data
	$uarray = getprogressdata($class, $reportdate, 0, $is_FUN_BADGE);
    
    // Get all gymnasts from: table gymnast_week_schedule which tracks gymnasts who have: moved, doing a catch up
    
    # Get 
    
    #check if gymnast for the class & day is on gymnast_week_schedule 
    
    $week_schedule_array = printclasslists_return_gymnast_week_schedule ($class, $weekno, $year, $gender_short, $remove_arr, $is_GYM_BADGE);
    
	/*print "<Pre>";
	print_r ($week_schedule_array);
	print "</pre>";
	
	print "<Pre>";
	print_r ($arr_students);
	print "</pre>";*/
	
    // loop through the student array 
    $counter = 0;
    foreach ($arr_students as $arr) {
    
    	if ( $arr[$day] ) {
			
			if ($arr ['user_multi_role'] == 'Trial') {
				$style = 'trial';
			}else {
				$style = 'notrial';
			}
							
			// Check if gymnast is in the remove_arr, whereby the gymnast has been moved to another day so that we should not list on this day
			$add = printclasslists_check_if_in_remove_arr ($remove_arr, $day, $arr, $bcat, $is_GYM_BADGE);
			$add = true;				 
			if ($add) {
				$counter ++;
				//print "in<br />";
				
				if ($counter % 2 == 0) {
            		$sclass = 'gymnast_even';
        		} else {
            		$sclass = 'gymnast_odd';
        		}
        		
        		if ($class_attendance [ $arr['uid'] ]['attendance']) {
        			$check = "<img src ='/sites/default/files/check-icon.png'>";
        			$arr ['attendance'] = 1;
        			$arr ['time_arrived'] = $class_attendance [ $arr['uid'] ]['time_arrived'];
        		}else {
        			$check = "";
        			$arr ['attendance'] = 0;
        			$arr ['time_arrived'] = "";
        		}
			
				/*printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls, $is_FUN_BADGE, &$group_drop_down, $time_arrived, $class_attendance);
							
				$gymnast_list_array .= printclasslists_get_gymnast_row_div ($gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down, $time_arrived);*/
				
				/* comment above */
				
				printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls, $is_FUN_BADGE, &$group_drop_down, $time_arrived, $class_attendance, $progress_report_id);

				//XXX
				$gymnast_list_array .= printclasslists_get_gymnast_row_div (null, $user,$badgetest,$gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down, $time_arrived);

			}
    	}
    }
    
    // now get any gymansts who have moved
    
    /*print "<pre>";
    print_r ($week_schedule_array);
    print "</pre>";*/
	
	/*print "check: <pre>";
	print_r ($gymnast_list_array );
	print "</pre>";*/
    
    if (is_array ($week_schedule_array) ) {
		
	
		foreach ($week_schedule_array as $u ) {
		
		// check to see that the gymnast moved matches day, gender and group
		
		 //print "bcat: $bcat<br />";
		 //print "day: $day <br />";
		
		/*if ($u['userid'] == 1296) {
			print $u['group']."<br />---";
			print $u['day_of_the_week'];
		}*/
		
		if ( $u['day_of_the_week'] == $day ) {
		//print "<br >** in";
		// for SKIL Badge, $u['group'] = coach's id

		if ($u['group'] != 'scratch_area_list') {
		
			if ($counter % 2 == 0) {
            	$sclass = 'gymnast_even';
        	} else {
            	$sclass = 'gymnast_odd';
        	}
			
			$counter++;
			
			$user_load = user_load($u['userid']);
			
			if ($class_attendance [$u['userid']]['attendance']) {
        		$check = "<img src ='/sites/default/files/check-icon.png'>";
				$arr ['attendance'] = 1;
        		$arr ['time_arrived'] = $class_attendance [ $u ['userid'] ]['time_arrived'];
				// not skil
        	}else {
        		$check = "";
        		$arr ['attendance'] = 0;
        		$arr ['time_arrived'] = "";
        	}
			
			/*print '<pre>';
			print_r ($user_load);
			print '</pre>';*/
			
			if ($u['trial']) {
				$trial_style = 'trial';
			}else {
				$trial_style = 'notrial';
			}
			
			if ($u['moved']) {
				
				$gymnast_key = $u['day_moved_from']."999".$style;
				//$day_of_the_week = $u['day_of_the_week'];
				$style = "$trial_style moved";
				
				
			}elseif ($u['catch_up']) {
				
				$gymnast_key = 'catchup';
				$style = "$trial_style catchup";
			}
			
			//$gymnast_key = $day."999".$style;
			
			$arr['uid'] = $u['userid'];
			$arr['profile_values_profile_last_name_value'] = strtoupper($user_load->profile_last_name);
			
			$arr['profile_values_profile_first_name_value'] = $user_load->profile_first_name;
							
			//printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls);
							
			//$gymnast_list_array [$day] [$bcat] .= printclasslists_get_gymnast_row_div ($gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day);
			
			/*printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls, $is_FUN_BADGE, &$group_drop_down);
							
				$gymnast_list_array .= printclasslists_get_gymnast_row_div ($gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down);*/
				
			printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls, $is_FUN_BADGE, &$group_drop_down, $time_arrived, $class_attendance, $progress_report_id);

			//XXX
			$gymnast_list_array .= printclasslists_get_gymnast_row_div (null,null,null,$gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down, $time_arrived);
			
			// load the user
			
		}
		} // end if ($u['group'] == $bcat && $u['day_of_the_week'])
		} // end if foreach
	}
	
	/*print "check 2: <pre>";
	print_r ($gymnast_list_array );
	print "</pre>";*/
	
	$output .= "<div class='gymnast_header_fun'><div class='gymnast_name'>Gymnast Name</div><div class='effort'>Effort</div><div class='time_left_early'>Left Early</div><div class='time_arrived'>Time Arrived</div><div class='group'>Group</div><div class='badge'>Badge</div></div>";
	
	$output .= $gymnast_list_array;
	
	return $output;
}

/*For Busters */

function printclasslists_fun_coach_capture_skills ($coach_id, $criteria_heading, $criteria_array, $group, $class, $date, $year, $fullday, $day, $weekno, $attendanceprogress, $arr_students, $pnode, $cnode, $roleid, $class_attendance = array(), $reportdate, $admin_override ) {

    $badge_type = explode("/",$_GET['q']);
    $badge_type = $badge_type[2];

	$progress_report_id = arg(1);
	
	$is_FUN_BADGE = true;
	$is_GYM_BADGE = false;
	
	$badge_style = '_fun';
	
	$rid = progresstracker_extract_role_id ($cnode->field_c_type[0]['value']);
	
	$dt = date('Y-m-d',strtotime($pnode->field_pr_date[0]['value']));
	$actualbadge = $pnode->field_pr_c_type[0]['value'];
	$badge = str_replace('-',' ',$pnode->field_pr_c_type[0]['value']);

	$sql = "select * from station where class='".$pnode->field_pr_c_type[0]['value']."' and date like '".$dt."%'";
	
	$result = db_query($sql);
	
	$arr_students = printclasslists_return_users_skilz_by_progress_and_group ($pnode->nid, $group);
	/* *start debug here **/
	//print "$day<pre>";
	//print_r ($arr_students);
	//print "</pre>";
	
	//print "<pre>";
	//print_r ($criteria_array);
	//print "</pre>";

    foreach ($criteria_array as $criteria) {
        if($criteria['gender'] = 'boys') {

        }
    }

	// Get all the progress report data
	$uarray = getprogressdata($class, $reportdate, 0, $is_FUN_BADGE);
    
    // Get all gymnasts from: table gymnast_week_schedule which tracks gymnasts who have: moved, doing a catch up
    
    # Get 
    
    #check if gymnast for the class & day is on gymnast_week_schedule 
    
    //$week_schedule_array = printclasslists_return_gymnast_week_schedule ($class, $weekno, $year, $gender_short, $remove_arr, $is_GYM_BADGE);
    
    // loop through the student array 
    $counter = 0;
	$overall_score_student = gym_badge_get_overall_score ();
	$students = array();
    foreach ($arr_students as $arr) {
        $students[] = $arr;
    	if ( $arr[$day] ) {
			
			if ($arr ['user_multi_role'] == 'Trial') {
				$style = 'trial';
			}else {
				$style = 'notrial';
			}
							
			$add = TRUE;						 
			if ($add) {
				$counter ++;
				
				if ($counter % 2 == 0) {
            		$sclass = 'gymnast_even';
        		} else {
            		$sclass = 'gymnast_odd';
        		}
        		
        		if ($class_attendance [ $arr['uid'] ]['attendance']) {
        			$check = "<img src ='/sites/default/files/check-icon.png'>";
        			$arr ['attendance'] = 1;
        			$arr ['time_arrived'] = $class_attendance [ $arr['uid'] ]['time_arrived'];
        		}else {
        			$check = "";
        			$arr ['attendance'] = 0;
        			$arr ['time_arrived'] = "";
        		}
			
				
				
				printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls, $is_FUN_BADGE, &$group_drop_down, $time_arrived, $class_attendance, $progress_report_id);
				
				printclasslists_get_row_variables_busters_for_coach (&$effort_select, $criteria_array, &$current_badge_text, $arr_students, $uarray, $arr);

				//XXX
				$gymnast_list_array .= printclasslists_get_gymnast_row_div (null,null,null,$gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down, $time_arrived);

			}
    	}
    }
	//var_dump($students);

    $output .= get_style_and_js();
	$output .= "<div class='gymnast_header_fun'><div class='gymnast_name'>Gymnast Name</div><div class='effort'>Effort</div><div class='badge'>Badge</div><div class='badge'>Criteria</div><div class='badge'>Basic</div><div class='badge'>Advanced</div></div>";
	foreach($students as $student) {
	    $output .= "<div style=\"padding: 3px;background-color: #e0e0e0;margin-bottom: 2px;\"><div class='student_name'>".$student['profile_values_profile_first_name_value'] . " " . $student['profile_values_profile_last_name_value']. "</div>
    <div class='student_effort'>
        <select name='student_effort'>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>    
        </select>
    </div>
<div class='student_badge'>". $badge_type ."</div>";
	    $comps = new Comps($criteria_array);
	    $comps->getCompsForUser($student['gender']);
	   // $comps->output_comps_new();
        $output .= $comps->display();
	$output .= "<div class='clear'></div></div>";
    }
	$output .= $gymnast_list_array;
	
	return $output;
}
class Comps {
    public $comps;
    public $compsnew = array();
    public $compsnewx = array();
    public $output = "";
    public function __construct($comps) {
        $this->comps = $comps;
    }
    public function getCompsForUser($student_gender) {
        foreach($this->comps as $row) {
            if($row['gender'] == "boys") {
                $this->getCompsForRowA($row['criteria_no'], boys);
            }
            else if($row['gender'] == "girls") {
                $this->getCompsForRowB($row['criteria_no'],"girls");
            }
        }
    }
    public function getCompsForRowA($id, $gender) {
        $sql = "SELECT * FROM {fun_criteria_new} WHERE criteria_no = '%s' AND gender = '%s' ORDER BY fcid DESC LIMIT 1";
        $res = db_query($sql, $id, $gender);
        while($sql = db_fetch_object($res)) {
          //  var_dump($sql);
            array_push($this->compsnew,array($id, $sql->category));
        }
    }
    public function getCompsForRowB($id, $gender) {
        $sql = "SELECT * FROM {fun_criteria_new} WHERE criteria_no = '%s' AND gender = '%s' ORDER BY fcid DESC LIMIT 1";
        $res = db_query($sql, $id, $gender);
        while($sql = db_fetch_object($res)) {
            //  var_dump($sql);
            array_push($this->compsnewx,array($id, $sql->category));
        }
    }
    public function output_comps_new() {
       // var_dump($this->compsnew);

    }
    public function display() {
        $count = 1;
        foreach($this->compsnew as $comps) {

            $this->output .= "<div class='student_criteria' style='width: 360px; font-size: 11px; float: right; border-bottom: 1px solid #d8d8d8;'>
<div class='student_criteria_name' style='float: left;width: 116px; padding: 10px'>#". /*$comps[1]*/$count. "</div>
<div class='student_basic' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'><input type='checkbox'></div>
<div class='student_advanced' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'><input type='checkbox'></div><div class='clear'></div></div><div class='clear'></div> ";
            $count++;
        }
        return $this->output;


    }
}
function get_compentences_for_student($row, $id) {
    var_dump($row['gender']);

    if(isset($row['gender'])) {
        if($row['gender'] == 'Male') {
            $sql = "SELECT * FROM {fun_criteria_new} WHERE criteria_no = '%s' AND gender = '%s' ORDER BY fcid DESC LIMIT 1";
            $res = db_query($sql, $id, 'boys');
            while($sql = db_fetch_object($res)) {
                echo '<br /><br />' . "TEST: ";
                return $sql->category;
            }
        }
        else {
            echo 'NOT SET';
        }
    }


}
function get_javascript_gym_allocation ($reportdate, $year, $progress_report_id, $classid, $class, $coachid, $role_id, $day, $weekno, $class_start_time = '', $class_length = '') {
    $output .= '<div id="dialog" style="display:none;"></div>';

    $output .= '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>';

    $output .= '<script type="text/javascript">
  
  $(document).ready(function(){ /* PREPARE THE SCRIPT */
  
  
   
  
   
   
        
   
        
    });
</script>';

    return $output;
}
function coachclass($badge) {
  global $user;
  if (in_array("Coach", array_values($user->roles))) {
	  $reportdate =  date('Y-m-d');
	  $date = $reportdate;
	  $class = str_replace("$"," ",$badge);
	  $year = date("Y", strtotime($reportdate));
      $fullday = date("l", strtotime($reportdate));        
      $day = strtolower($fullday);                          
      $weekno = get_week_num($reportdate);
      //print "weekno: ".$weekno;
      
      if ($badge == 'GYM-Badge 1' OR $badge == 'GYM-Badge 2') {
      	$is_GYM_BADGE = 1;
      }else {
      	$is_GYM_BADGE = 0;
      }

	// role id is the corresponding drupal role which matches the 'class' eg GYM Badge 1
	$role_id = get_role_name ($class);
	  
	  // Get corresponding gymnast
	//$progress_report = get_progress_report ($reportdate, $class);
	$progress_report = checkadmin($class, $reportdate);
	
	// Get the corresponding class id, this the node id from the class node that has been created for this quarter eg 1st Quarter - GYM Badge 1 
	//$temp_result = checkadmin($class, $reportdate);
	$classid = $progress_report ['cid'];
	
	if ($progress_report) {
		$progress_report_id = $progress_report['pid'];
	}else {
		drupal_set_message('No Class has been created for <b>'.$class.'</b> for this quarter.  Please contact the website administrator','error');
		drupal_goto("");
	}

	  // Get the first set of j scripts we need
	  $pr = printclasslists_get_jquery_scripts ();
	  
	  $class_details = printclasslists_get_class_start_length ($classid, $day);

	  // $return->class_start_time = $class_node->{$class_time_field}[0]['value'];
	  //$return->class_length = $progress_report_node->field_pr_c_length[0]['value'];
	  
	  // get the second set of j scripts
	  $pr .= printclasslists_get_javascript_coach_capture_list ($reportdate, $year, $progress_report_id, $classid, $class, $user->uid, $role_id, $day, $weekno, $is_GYM_BADGE, $class_details->class_start_time, $class_details->class_length);
	  
	  // Check if the current user is admin, or Coach admin and then display all the classes for the day
	  $admin_override = false;
	  if ($user->uid ==1) {
			$is_admin = true;	
	  } else {
			$is_admin = progresstracker_check_if_has_role ($user, 'admin');
			$is_coach_admin = progresstracker_check_if_has_role ($user, 'Coach Admin');
			$is_membership_manager = progresstracker_check_if_has_role ($user, 'Membership Manager');
			
			if ($is_admin OR $is_coach_admin OR $is_membership_manager) {
				$admin_override = true;
			}else $admin_override = false;
	  }
	  
	  if ($admin_override AND $is_GYM_BADGE) {
	  	$pr .= printclasslists_get_pending_badge_for_admin_approval ();
	  }

	  if(!$admin_override && $is_GYM_BADGE) {
          $returnxx .= '<div class="select_gymnasts">
			<h3>Select Group of Gymnasts:</h3>
			<form name="f1" id="f1" method="post" >
			<select name="group" class="select_group">
				<option value="">--Select Group--</option>';
                 $returnxx .= '<option value="Group 1" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 1</option>';
                 $returnxx .= '<option value="Group 2" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 2</option>';
                 $returnxx .= '<option value="Group 3" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 3</option>';
                 $returnxx .= '<option value="Group 4" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 4</option>';
                 $returnxx .= '<option value="Group 5" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 5</option>';
                 $returnxx .= '<option value="Group 6" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 6</option>';
                 $returnxx .= '<option value="Group 7" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 7</option>';
                 $returnxx .= '<option value="Group 8" '.(($_POST['group']==$x)?'selected="selected"':'').'>Group 8</option>';



          $returnxx .='	
			
			</select>
			</div>
			<div class=go_select>
					<input class="manageresult_go" type="submit" name="sb" value="GO">
			</div>';

          //if(!isset($_POST['group'])) {
              //return $return;
          //}
      }


      $query = 'SELECT u.uid, u.name ' .
          'FROM {users} AS u ' .
          'JOIN {users_roles} AS ur ' .
          'ON ur.uid = u.uid ' .
          'WHERE ur.rid = 14' ;

      $res = db_query($query);

     // $return .= progresstracker_get_javascript_gym_allocation ($reportdate, $year, $progress_report_id, $classid, $class, $user->uid, $role_id, $day, $weekno, $class_details->class_start_time, $class_details->class_length);
      $output .= '<div id="dialog" style="display:none;"></div>';

      $output .= '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>';

      $output .= '<script type="text/javascript">
  $(document).ready(function(){ /* PREPARE THE SCRIPT */
   $(".h2_coach_competency_list").click(function(){
        $(".coach_competency_list_inner").toggle(500);
    });
    var comp_badge = "";
    var comp_gender = "";
    $("#comp_badge").on("click",function(ff) {
            comp_badge = $("#comp_badge option:selected").val();     
    });
    
    $("#comp_gender").on("click",function(ff) {
      
           comp_gender = $("#comp_gender option:selected").val();
    });
    $("#comp_go").on("click",function(g) {
         comp_badge = $("#comp_badge option:selected").val();     
         comp_gender = $("#comp_gender option:selected").val();
        alert(comp_badge + " " + comp_gender);
        var postdataa = {
					report_date: "'.$reportdate.'",
					report_year: '.$year.',
					progress_report_id: '.$progress_report_id.',
					coach_id: '.$user->uid.',
					role_id: '.$role_id.',
					classid: '.$classid.',
					report_day: "'.$day.'",
					week_no: '.$weekno.',
					class_name: "'.$class.'",
					sub_badge:comp_badge,
					sub_gender:comp_gender
				};
					
				var url_directa = "/getcriteriaforcoaches";
				$.post(url_directa, postdataa,function(x) {
				    $(".comps").html(x);
				 });
					
	});
      
	  $(\'#dialog\').dialog({
				autoOpen: false,
				show: "blind",
				position: {
					my: "left+5 top+5",
					at: "left+5 top+5",
					of: window,
					collision: "none"
				},
				hide: "explode",
				modal: true,
				open: function(event, ui) {
					setTimeout(function(){
						$(\'#dialog\').dialog(\'close\');                
					}, 2000);
				}
		});
			
				
		$(document).on("click", ".button_save",function() {
			var user_id_temp = $(this).attr("name");
			user_id_temp = user_id_temp.replace("button_", "");
			//alert (user_id_temp);
			
			selectedvalue = $("#competency_" + user_id_temp).val();
			
			//alert (selectedvalue);
			
			var postdataa = {
					user_id: user_id_temp,
					value_competency: selectedvalue, 
					report_date: "'.$reportdate.'",
					report_year: '.$year.',
					progress_report_id: '.$progress_report_id.',
					coach_id: '.$user->uid.',
					role_id: '.$role_id.',
					classid: '.$classid.',
					report_day: "'.$day.'",
					week_no: '.$weekno.',
					class_name: "'.$class.'",
					sub_badge:comp_badge,
					sub_gender:comp_gender,
				};
					
				var url_direct = "/gymcoachcompetency_save";
				
				$.ajax({
					url: url_direct,
					type: "POST",
					dataType: "json",
					data: postdataa,

					success: function(response) {
						//var json = $.parseJSON(response)
						$("#dialog").html(response.msg);
						$("#dialog").dialog("open");
						//alert(response.msg);
						return response.msg;        
					},
					error: function(xhr) {
						// alert("An error occured: " + xhr.status + " "+ xhr.statusText);
					}
				});	
		});
  
    });
  
</script>';
      $return .= $output;
      $coach_competency = printclasslists_fetch_coach_competencies ($progress_report_id, $classid);
      $return .= "<div class='coach_competency_list'>";
      $return .= "<h2 class='h2_coach_competency_list'>Allocate competencies to coaches</h2>";
      $return .= "<div class='coach_competency_list_inner'>";
      $return .= "<h3>Allocate competencies to coaches, with a space (or comma) between each number eg 1 5 8</h3>";
      $return .= "<div>Please select G Y or M to and Gender to allocate the competencies to these coaches.
<select id='comp_badge'>
<option>Badge</option>
<option>---</option>
<option value='G'>G</option>
<option value='Y'>Y</option>
<option value='M'>M</option>
</select>
<select id='comp_gender'>
<option>Gender</option>
<option>---</option>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
</select>
<input type='button' id='comp_go' value='Get'>
</div>";



      $return .= "<div class='gymnast_header'>
                            <div class='gymnast_name'>Coach Name</div>
                            <div class='ce_current_badge'>Competencies</div>
                            </div>";
      $return .= "<div class='coachlist comps'>";

      //$class_attendance = progresstracker_get_attendance_per_class ($year, $weekno, $date, $class, $role_id, $progress_report_id, $day);

      while($row = db_fetch_object ($res)){
          $uid = $row->uid;
          $return .= "<div class='gymnast_row gymnast_row_coach'>";
          $return .= 		"<div class='gymnast_name'>". $row->name."</div>";
          $return .= "<input type='text' name='competency_{$uid}' id='competency_{$uid}' width=20 value='".$coach_competency [$uid]."'/> &nbsp;
    <input type=\"button\" name=\"button_{$uid}\" id=\"button_{$uid}\" value=\"Save\" class='button_save' />";
          $return .= "</div>";
      }
      $return .= "</div>";
      $return .= "</div>";
      $return .= "</div>";

      if($admin_override) {
          $pr .= $return;
      }
	  // Get the class for the current coach
	  //$pr .= printclasslists_get_coach_capture_list ($badge, $dt, $user->uid, true);

	  $pr .= printclasslists_get_coach_capture_list ($_POST['group'], $class, $date, $year, $fullday, $day, $weekno, $role_id, $classid, $progress_report_id, $reportdate, $user->uid, true, $admin_override, $is_GYM_BADGE, $admin_override);
      $pr .= $returnxx;
	  if ($is_GYM_BADGE && ($is_admin || $is_coach_admin || $is_membership_manager ) ) {
            
    		//$weekno = get_week_num($dt);
	  		
	  		$cat_arr = array ('Group 1', 'Group 2', 'Group 3', 'Group 4', 'Group 5', 'Group 6', 'Group 7', 'Group 8');
	  		
	  		  
  			$pr .= '<div class="sub_classes">';
	  		
	  		foreach ($cat_arr as $c) {
	  			$temp_coach = get_coach_allocated_to_group ($weekno, $c, $badge);
	  			//print "<pre>$c | $weekno | $badge";
	  			//print_r ($temp_coach);
	  			//print "</pre>";

	  			if ($temp_coach->coach_id != $user->uid) {
	  			    //XXXX

					$print_class_list_data = printclasslists_get_coach_capture_list (null,$class, $date, $year, $fullday, $day, $weekno, $role_id, $classid, $progress_report_id, $reportdate, $temp_coach->coach_id, false, $admin_override, $is_GYM_BADGE, $admin_override);
	  				
	  				if ($print_class_list_data) {

		  				$temp_class = str_replace (" ", "", $c);
		  				$pr .= '<script>
$(document).ready(function(){
    $(".h2_'.$temp_class.'").click(function(){
        $(".class_inner_'.$temp_class.'").toggle(500);
    });
});
</script>';
	  			
	  					$pr .= "<div class='class_list'>";
	  					$pr .= "<h2 class='h2_".$temp_class."'>$c: ".$temp_coach->coach_name."</h2>";
	  					$pr .= "<div class='class_inner_".$temp_class."'>";	  				
	  					$pr .= $print_class_list_data;
	  					$pr .= "</div>";
	  					$pr .= "</div>";
	  				}else {
	  					// no students in the class.
						$pr .= "<div class='class_list'>";
	  					$pr .= "<h2 class='h2 nopointer'>$c: ".$temp_coach->coach_name." (NO GYMNASTS IN CLASS)</h2>";
	  					$pr .= "</div>";
	  				}
	  			}
	  		} 

	  		$pr .= "</div>";
	  		
	  		
	  }elseif (!$is_GYM_BADGE && ($is_admin || $is_coach_admin || $is_membership_manager )  ) {
	  	 $query = 'SELECT u.uid, u.name ' .
       'FROM {users} AS u ' .
       'JOIN {users_roles} AS ur ' .
       'ON ur.uid = u.uid ' .       
       'WHERE ur.rid = 14 ORDER BY u.name ASC' ;
    
    	$res = db_query($query);
        $data_name = array();
        $counter = 1;
        	while($temp_coach = db_fetch_object($res)){   

        	    if ($temp_coach->uid != $user->uid) {
        	    $temp_name = get_user_first_last ($temp_coach->uid);

					$print_class_list_data = printclasslists_get_coach_capture_list (null, $class, $date, $year, $fullday, $day, $weekno, $role_id, $classid, $progress_report_id, $reportdate, $temp_coach->uid, false, $admin_override, $is_GYM_BADGE, $admin_override);
	  				
	  				if ($print_class_list_data) {

		  				$temp_class = str_replace (" ", "", $c);
		  				$pr .= '<script>
$(document).ready(function(){
    $(".h2_'.$counter.'").click(function(){
        $(".class_inner_'.$counter.'").toggle(500);
    });
});
</script>';
	  			
	  					$pr .= "<div class='class_list'>";
	  					$pr .= "<h2 class='h2_".$counter."'>".$temp_name."</h2>";
	  					$pr .= "<div class='class_inner_".$counter."'>";	  				
	  					$pr .= $print_class_list_data;
	  					$pr .= "</div>";
	  					$pr .= "</div>";
	  				}else {
	  					// no students in the class.
						$pr .= "<div class='class_list'>";
	  					$pr .= "<h2 class='h2 nopointer'>".$temp_name." (NO GYMNASTS IN CLASS)</h2>";
	  					$pr .= "</div>";
	  				}
	  			
        	    $counter++;
        	    }
        	}
	  	
	  	
	  }
	  
	  
	  $pr .= printclasslists_get_coach_capture_footer ();
	  return $pr;
  }else {
	  return "<p>Current user has not been allocated the 'Coach Role'</p>";
  }
}
function progresstracker_get_javascript_gym_allocation ($reportdate, $year, $progress_report_id, $classid, $class, $coachid, $role_id, $day, $weekno, $class_start_time = '', $class_length = '') {
    $output .= '<div id="dialog" style="display:none;"></div>';

    $output .= '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>';

    $output .= '<script type="text/javascript">
  
  $(document).ready(function(){ /* PREPARE THE SCRIPT */
  
	  $(\'#dialog\').dialog({
				autoOpen: false,
				show: "blind",
				position: {
					my: "left+5 top+5",
					at: "left+5 top+5",
					of: window,
					collision: "none"
				},
				hide: "explode",
				modal: true,
				open: function(event, ui) {
					setTimeout(function(){
						$(\'#dialog\').dialog(\'close\');                
					}, 2000);
				}
		});
			
				
		$(".button_save").click(function() {
			var user_id_temp = $(this).attr("name");
			user_id_temp = user_id_temp.replace("button_", "");
			//alert (user_id_temp);
			
			selectedvalue = $("#competency_" + user_id_temp).val();
			
			//alert (selectedvalue);
			
			var postdata = {
					user_id: user_id_temp,
					value_competency: selectedvalue, 
					report_date: "'.$reportdate.'",
					report_year: '.$year.',
					progress_report_id: '.$progress_report_id.',
					coach_id: '.$coachid.',
					role_id: '.$role_id.',
					classid: '.$classid.',
					report_day: "'.$day.'",
					week_no: '.$weekno.',
					class_name: "'.$class.'"
				};
					
				var url_direct = "/gymcoachcompetency_save";
				
				$.ajax({
					url: url_direct,
					type: "POST",
					dataType: "json",
					data: postdata,

					success: function(response) {
						//var json = $.parseJSON(response)
						//$("#dialog").html(response.msg);
						//$("#dialog").dialog("open");
						//alert(response.msg);
						//return response.msg;        
					},
					error: function(xhr) {
						// alert("An error occured: " + xhr.status + " "+ xhr.statusText);
					}
				});	
		});
  
    });
</script>';

    return $output;
}
function get_style_and_js() {
    $output .= <<<AAA
<style>
.clear {
    clear: both;
}
.student_name {
    width: 24%;
    padding: 5px;
    float: left;
}
.student_effort {
    width:15%;
    padding: 5px;
       float: left;
}
.student_badge {
    width: 15%;
    padding: 5px;
       float: left;
}
</style>
AAA;

    return $output;
}
function savetotrack() {

	/* 
		$_POST [attendance] : 'Class Length Attended (min) ' the attendance time of the gymnast for the class eg 50 (in minutes).  Field in database: 'attendance'
		$_POST [leng] : 'Class Length Total (min)' the total class length, eg 60 (in minutes).  A gymnast eg then attends 50/60 of the class. Field in database 'classtime'
		$_POST [effort] : 'Effort' effort mark out of 5. Field in database 'performance_real'
		$_POST['classlength'] : For GYM classes, the classlength can't be changed by the coaches, so no drop down
	
	*/

	global $base_url;
	if ($_POST['pdate'] && $_POST['pbadge']) {
		
		$disable_class_total = false;
		if($_POST['pbadge'] == 'GYM-Badge 1' || $_POST['pbadge'] == 'GYM-Badge 2')		
		{	
			$disable_class_total = true;
		}
		
		$result = checkadmin($_POST['pbadge'], $_POST['pdate']);
		$flag = true;
		$checkpoint1 = 0;
		$checkpoint2 = 0;
		$checkpoint3 = 0;
		
		
		
		if ($_POST['effort']) {
			foreach ($_POST['effort'] as $key => $value) {	
				
				if ($disable_class_total) {
					$_POST['leng'][$key] = $_POST['classlength'];
					
				}
								
				if ( (in_array($value, array(1,1.5,4,4.5,5)) &&
					 trim($_POST['comment'][$key]) == "")
				) {			
					$_SESSION['postcheck'][$key] = 1;	
					if ($checkpoint1 == 0) {
						drupal_set_message(t('Comment for gymnast is required if "Effort" is 2 or lower OR 4 or higher'), 'error');
						$checkpoint1 = 1;
					}
					$flag = false;
				}
				
				
				if (
					 $_POST['effort'][$key] >= 1 && $_POST['attendance'][$key] <= 0 
				) {			
					$_SESSION['postcheck'][$key] = 1;	
					if ($checkpoint2 == 0) {
						//drupal_set_message(t("Class Length Attended (Min) is required if 'Effort' mark is set."), 'error');
						//$checkpoint2 = 1;
					}
					$flag = false;
				}
			    if (
					 $_POST['effort'][$key] <= 0 && $_POST['attendance'][$key] >= 1 
				) {			
					$_SESSION['postcheck'][$key] = 1;	
					if ($checkpoint3 == 0) {
						drupal_set_message(t("Please select a value for Effort."), 'error');
						$checkpoint3 = 1;
					}
					$flag = false;
				}
				if ( $_POST['attendance'][$key] > $_POST['leng'][$key] ) {
					$_SESSION['postcheck'][$key] = 1;
					if ($checkpoint4 == 0) {
						drupal_set_message(t("Class Length Attended (".$_POST['attendance'][$key].") should not be larger than Class Length Total (".$_POST['leng'][$key].")"), 'error');
						$checkpoint4 = 1;
					}
					$flag = false;
					
				}

			}
		}
		
		if ($_POST['perform']) {
			foreach ($_POST['perform'] as $key => $value) {					
				if ( (in_array($value, array(1,1.5,2,4,4.5,5)) &&
					 trim($_POST['comment'][$key]) == "")
				) {			
					$_SESSION['postcheck'][$key] = 1;	
					if ($checkpoint1 == 0) {
						drupal_set_message(t('Comment for gymnast is required if "Performance" is 2 or lower OR 4 or higher'), 'error');
						$checkpoint1 = 1;
					}
					$flag = false;
				}
				
				
				if (
					 $_POST['perform'][$key] >= 1 && $_POST['attendance'][$key] <= 0 
				) {			
					$_SESSION['postcheck'][$key] = 1;	
					if ($checkpoint2 == 0) {
						drupal_set_message(t("Class Length Attended (Min) is required if 'Performance' mark is set."), 'error');
						$checkpoint2 = 1;
					}
					$flag = false;
				}
			    if (
					 $_POST['perform'][$key] <= 0 && $_POST['attendance'][$key] >= 1 
				) {			
					$_SESSION['postcheck'][$key] = 1;	
					if ($checkpoint3 == 0) {
						drupal_set_message(t("Performance mark is required if Class Length Attended (Min) value is set."), 'error');
						$checkpoint3 = 1;
					}
					$flag = false;
				}
				if ( $_POST['attendance'][$key] > $_POST['leng'][$key] ) {
					$_SESSION['postcheck'][$key] = 1;
					if ($checkpoint4 == 0) {
						drupal_set_message(t("Class Length Attended should not be larger than Class Length Total"), 'error');
						$checkpoint4 = 1;
					}
					$flag = false;
					
				}

			}
		}
		
		
		
		if ($result['pid'] && $result['cid']) {
				db_query("delete from progresstracker where progressid='".$result['pid'].
						"' and classid='".$result['cid']."'");
				if ($_POST['effort']) {
						foreach ($_POST['effort'] as $key => $value) {					
									
									$userid = $key;
									if ($key=='x')
									$userid = $_POST['student'][$key];
									if ($userid) {
									$query = "INSERT INTO progresstracker set
									uid='".$userid."',
									progressid='".$result['pid']."',
									created='".time()."',
									classid='".$result['cid']."',
									classtime='".$_POST['leng'][$key]."',
									attendance='".$_POST['attendance'][$key]."',
									performance='".$_POST['perform'][$key]."',
									performance_real='".$_POST['effort'][$key]."',
									coach_note='".$_POST['comment'][$key]."',
									coachid ='".$_POST['pcoach']."', 
									year='".date('Y')."',
									role='".$_POST['pbadge']."',
									roleid='".printclasslists_extract_role_id($_POST['pbadge'])."'";
									db_query($query);
									}
						}
						if ($flag)
						drupal_set_message('Your progress tracker report is saved successfully.');
				}
		}
	}
	drupal_goto("coachclass/".$_POST['pbadge']);
}

function get_progress_report ($reportdate, $badge) {
	$reportdate = $reportdate . 'T00:00:00';
	$query = "select pr.nid as pid,pc.field_pr_class_nid as cid from content_field_pr_date pr ,
		 content_field_pr_class pc,
		 content_type_class c	
		 where pr.nid=pc.nid and
		 pc.field_pr_class_nid = c.nid and	
		 pr.field_pr_date_value='" . $reportdate . "' and
		 UNIX_TIMESTAMP(c.field_c_dates_value) <= " . strtotime($reportdate) . " <=
		 UNIX_TIMESTAMP(c.field_c_dates_value2) and 
		 c.field_c_type_value='" . $badge . "'";
		 //print $query;
	$result = db_query($query);
	
	$row = db_fetch_array($result);

	if ($badge=='GYM-Badge 1') {
			$badtxt = 'GYM-Badge';
    }
	if ($badge=='GYM-Badge 2') {
			$badtxt = 'GYM-Badge 2';
    }
    
    if ($badge=='TID') {
			$badtxt = 'TID';
    }
    
	if ($badge=='SKIL-Badge') {
			$badtxt = 'SKIL-Badge & ELITE';
    }
	if (!$row['pid'] && !$row['cid']) {
		// no progress report node found for this date for this class
		return false;
	}else return $row;
}

function checkadmin($badge, $reportdate) {

	//print $badge."<br />";
	//print $reportdate."<br />";
    //watchdog("printlcasslists", '1 badge:'.$badge);
    //watchdog("printlcasslists", '1-2 reportdate:'.$reportdate);
	$reportdate = $reportdate . 'T00:00:00';
	$query = "select pr.nid as pid,pc.field_pr_class_nid as cid from content_field_pr_date pr ,
		 content_field_pr_class pc,
		 content_type_class c	
		 where pr.nid=pc.nid and
		 pc.field_pr_class_nid = c.nid and	
		 pr.field_pr_date_value='" . $reportdate . "' and
		 UNIX_TIMESTAMP(c.field_c_dates_value) <= " . strtotime($reportdate) . " <=
		 UNIX_TIMESTAMP(c.field_c_dates_value2) and 
		 c.field_c_type_value='" . $badge . "'";
		 //print $query;
	$result = db_query($query);
	$row = db_fetch_array($result);

	if ($badge=='GYM-Badge 1') {
			$badtxt = 'GYM-Badge';
    }
	if ($badge=='GYM-Badge 2') {
			$badtxt = 'GYM-Badge 2';
    }
    
    if ($badge=='TID') {
			$badtxt = 'TID';
    }
    
	if ($badge=='SKIL-Badge') {
			$badtxt = 'SKIL-Badge & ELITE';
    }
    
          //watchdog("printlcasslists", '2');
    
	if (!$row['pid'] && !$row['cid']) {
		// a progress report has not yet been created for this class -> date, create progressreport node:
		
		     // watchdog("printlcasslists", '3');
		
		# find the corresponding class
		//print "<br />report date: ".$reportdate."<br >";
		$query = "SELECT nid 
		from content_type_class 
		WHERE field_c_type_value = '" . $badge . "' 
		AND field_c_dates_value <= " . strtotime($reportdate) . " 
		AND UNIX_TIMESTAMP(field_c_dates_value2) >= " . strtotime($reportdate);
		$result = db_query($query);
		$row_class = db_fetch_array($result);
		
		//if (!$row_class['nid'] & !$row['cid']) {
		if ( !$row_class['nid'] ) {
			drupal_set_message('4 No Class has been created for <b>'.$badtxt.'</b> for this quarter.  Please contact the website administrator','error');
			      //watchdog("printlcasslists", '4');
			/*print "<pre>";
			print_r ($row_class);
			print "</pre>";
			
			print "badge: $badge <br />";
			print "reportdate: $reportdate <br />";
			
			print $query;
			die;*/
			
			drupal_goto("");
			die;
		}
		     // watchdog("printlcasslists", '5');
		$class_node = node_load ($row_class['nid']);
		
		
		/*print "Class Node<pre>";
		print_r ($class_node);
		print "</pre>";*/
		
		
		//print "<br />*************<br />";
		
		     // watchdog("printlcasslists", '6');
		$progress_row = printclasslists_create_progress_report_node ($badge, $row_class['nid'], $reportdate);
		
		//print $query;
				
	
		drupal_set_message('Progress Report has been created for <b>'.$badge.'</b> for today.','message');
		 
		return $progress_row; 
		  
		//drupal_goto("");
	}
	return $row;
}

/* create a progress report programtically if required */

function printclasslists_create_progress_report_node ($badge, $class_id, $reportdate) {

	// load the corresponding class
	      //watchdog("printlcasslists", '7');
	$class_node = node_load ($class_id);
	

	$node = new stdClass();
  	$node->type = 'progressreport';
  
  	include_once('modules/node/node.pages.inc');
  	node_object_prepare($node);
  
  	$node->title    = date ('d F Y').":".$badge;
  	$node->language = LANGUAGE_NONE;
  	
  	// Fields
  	
  	// PR Date
  	$node->field_pr_date [0] ['value'] = date('Y-m-d')."T00:00:00";
  	$node->field_pr_date [0] ['timezone'] = "Africa/Johannesburg";
  	$node->field_pr_date [0] ['timezone_db'] = "Africa/Johannesburg";
  	$node->field_pr_date [0] ['date_type'] = 'date';
  	
  	// PR Class ID
  	$node->field_pr_class [0] ['nid'] = $class_id;
  	
  	// PR Class Type  	
  	$node->field_pr_c_type [0] ['value'] = $badge;
  	
  	// PR Class Dates
  	$node->field_pr_c_dates [0] ['value'] = $class_node->field_c_dates [0] ['value'];
  	$node->field_pr_c_dates [0] ['value2'] = $class_node->field_c_dates [0] ['value2'];
  	$node->field_pr_c_dates [0] ['timezone'] = $class_node->field_c_dates [0] ['timezone'];
	$node->field_pr_c_dates [0] ['timezone_db'] = $class_node->field_c_dates [0] ['timezone_db'];
	$node->field_pr_c_dates [0] ['date_type'] = $class_node->field_c_dates [0] ['date_type'];
  	 
  	 // PR C Length
  	 $node->field_pr_c_length [0] ['value'] = $class_node->field_c_length [0] ['value'];
  	 
  	 // PR Class Quarter
  	 $node->field_pr_c_quarter [0] ['value'] = $class_node->field_class_quarter [0] ['value'];
  	 
  	 // other node fields
  	 
  	 $node->print_display = 1;
     $node->print_display_comment = 0;
     $node->print_display_urllist = 1;
     $node->print_pdf_display = 1;
     $node->print_pdf_display_comment = 0;
     $node->print_pdf_display_urllist = 1;
  
  	 $my_node_nid = $my_node->nid; 
      watchdog("printlcasslists", '8');
  	 $path = 'progress/' . date ('d-F-Y')."-". str_replace (" ", "-", $badge);
  	 $node->path = $path;

  /*print "<pre>";
  print_r ($node);
  print "</pre>";
  
die;*/
      // watchdog("printlcasslists", '9');
  node_save($node);
  
  // $_REQUEST [destination] is set to something like => "captureprogress/8457" which 		messes with drupal_goto
  // See: https://sites.google.com/site/prathameshsave007/drupal-forums/drupal_goto-not-working for more details
  // hence clear drupal_static_reset
  
  if (isset($_REQUEST['destination'])) {
  	unset($_REQUEST['destination']);
  }
  
        // watchdog("printlcasslists", '10');
  
  
  // check that the progress report node has been created correctly
  $query = "SELECT pr.nid as pid,pc.field_pr_class_nid as cid from content_field_pr_date pr ,
		 content_field_pr_class pc,
		 content_type_class c	
		 where pr.nid=pc.nid and
		 pc.field_pr_class_nid = c.nid and	
		 pr.field_pr_date_value='" . $reportdate . "' and
		 UNIX_TIMESTAMP(c.field_c_dates_value) <= " . strtotime($reportdate) . " <=
		 UNIX_TIMESTAMP(c.field_c_dates_value2) and 
		 c.field_c_type_value='" . $badge . "'";
		 //print $query;
	$result = db_query($query);
	$row = db_fetch_array($result);
	
	//print "<pre>";
	//print_r ($row);
	//print "</pre>";
	
	//print $query;
	      // watchdog("printlcasslists", '11');
	
	if (!$row['pid']) {
			drupal_set_message('Class/Progress Report auto creation for <b>'.$badge.'</b> for this quarter failed.  Please contact the website administrator"','error');
			//print "<br />in";
			//die;
			     // watchdog("printlcasslists", '12');
			drupal_goto("");
			     // watchdog("printlcasslists", '13');
		}
		
	return $row;
	
	
		
}

function getprogressdata($class, $reportdate, $coachid = 0, $is_FUN_BADGE = false) {
		$result = checkadmin($class, $reportdate);
		$uarray = array();
		if ($result['pid'] && $result['cid']) {
				if ($coachid) {
                                    $output = db_query("select * from progresstracker where progressid='".$result['pid'].
						"' and classid='".$result['cid']."'");
//					$output = db_query("SELECT * FROM progresstracker as p "
//                                                . "JOIN {coachallocatedtobadge} AS coach "
//                                                . "ON coach.badge_role = p.roleid "
//                                                . "WHERE p.progressid='".$result['pid']."' AND classid='".$result['cid']."' AND coachid=$coachid AND coach.group_name='Girls A'");
//                                        $query = 'SELECT u.uid, u.name ' .
//                                        'FROM {users} AS u ' .
//                                        'JOIN {users_roles} AS ur ' .
//                                        'ON ur.uid = u.uid ' .       
//                                        'WHERE ur.rid = "'.$coachgroups[2].'"';
//                                    $output = db_query('SELECT * ' .
//                                            'FROM {coachallocatedtobadge} AS coach ' .
//                                            'WHERE coach.coach_id = "'.$coachid.'"');
				}else {
				
					$output = db_query("select * from progresstracker where progressid='".$result['pid'].
							"' and classid='".$result['cid']."'");
				}
				
				if ($output) {
						while($row = db_fetch_array($output)) {
								$uarray[$row['uid']] = $row;
						}
				}
			
			if ($is_FUN_BADGE) {
			// get the group that the gymanst has been allocated to for FUN Badge
				$fun_output = db_query("select * from gymnast_group where progressid='".$result['pid']."'");
				
				if ($fun_output) {
						while($row = db_fetch_array($fun_output)) {
								$uarray[$row['uid']]['groupnumber'] = $row['groupnumber'];
						}
				}
				
			}

		}
		
		
		
		/*print "<pre>";
		print_r ($uarray);
		print "</pre>";*/
		
		return $uarray;
}


/* old function see printclasslists_get_coach_capture_list */

function getbadgestudents($class,$reportdate,$coachid, $postdata) {
	

	
	$path = drupal_get_path('module', 'printclasslists');    
    drupal_add_js($path . '/js/printclasslists.js');
	
	$class = str_replace("$"," ",$class);
	$date = date("Y-m-d", strtotime($reportdate));
	$year = date("Y", strtotime($reportdate));
    $fullday = date("l", strtotime($reportdate));        
    //echo $_REQUEST['print']; exit;
	$day = strtolower($fullday);

	$uarray = getprogressdata($class, $reportdate, $coachid);
	
	
	/*$query = "select b.*
	from gym_badge_save b where badclass='".$class."' and baddate='".$reportdate."'";
	$badresult = db_query($query);
	*/        
        
	$extra = '';
	$badtxt = $class; 
	if ($class=='GYM-Badge 1') {
		//$extra = " or field_g_type_value ='TID-Badge 1'";
		$badtxt = 'GYM-Badge 1';
		$r = printclasslists_extract_role_id('GYM-Badge 1');
		//$r1 = printclasslists_extract_role_id('TID-Badge 1');
		$hideperform = 1;
	}
	if ($class=='GYM-Badge 2') {
		//$extra = " or field_g_type_value ='TID-Badge 2'";
		$badtxt = 'GYM-Badge 2';
		$r = printclasslists_extract_role_id('GYM-Badge 2');
		//$r1 = printclasslists_extract_role_id('TID-Badge 2');
		$hideperform = 1;
	}

	if ($class=='TID') {
		$extra = " or field_g_type_value ='TID-Badge 2'";
		$badtxt = 'TID';
		$r = printclasslists_extract_role_id('TID');
		$r1 = printclasslists_extract_role_id('TID-Badge 2');
		$hideperform = 1;
	}

	if ($class=='SKIL-Badge') {
		$extra = " or field_g_type_value ='ELITE'";
		$badtxt = 'SKIL-Badge & ELITE';
		$r = printclasslists_extract_role_id('SKIL-Badge');
		$r1 = printclasslists_extract_role_id('Elite');
	}

	$groupusers = group_return_users(null, $r, $r1, $day, &$break, $coachid, $class, $date);

	
	$xdate = $reportdate." 23:00:00";
	$query = "select field_c_length_value from content_type_class where UNIX_TIMESTAMP(field_c_dates_value) <= ".
		strtotime($xdate)." and ".strtotime($xdate)." <= UNIX_TIMESTAMP(field_c_dates_value2) and field_c_type_value='".$class."'".
		$extra;
	$leng = db_result(db_query($query));

	$date = date("Y-m-d", strtotime($reportdate));
	$fullday =  date("l", strtotime($reportdate));    

	global $base_url;
	
	// Get Role for this class
	$role_id = get_role_name ($class);
	
	// Get corresponding gymnast
	$progress_report = get_progress_report ($reportdate, $class);
	
	// Get the corresponding class id
	$temp_result = checkadmin($class, $reportdate);
	$classid = $temp_result ['cid'];
	
	if ($progress_report) {
		$progress_report_id = $progress_report['pid'];
	}else {
		drupal_set_message('2 No Class has been created for <b>'.$class.'</b> for this quarter.  Please contact the website administrator','error');
		drupal_goto("");
	}
	
	$output .= '<div id="dialog" style="display:none;"></div>';
	$output .= '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>';
  
  	$output .= '<script type="text/javascript">
  
  $(document).ready(function(){ /* PREPARE THE SCRIPT */
  
  $(\'#dialog\').dialog({
    		autoOpen: false,
    		show: "blind",
    		position: {
				my: "left+5 top+5",
				at: "left+5 top+5",
				of: window,
				collision: "none"
			},
    		hide: "explode",
    		modal: true,
    		open: function(event, ui) {
        		setTimeout(function(){
            	$(\'#dialog\').dialog(\'close\');                
        	}, 1000);
    	}
		});
  
    $(".dropdown-counter").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
    
    var user_id_temp = $(this).attr("name");
    user_id_temp = user_id_temp.replace("effort[", "");
    user_id_temp = user_id_temp.replace("]", "");
    
    var selectedvalue = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
    
    var postdata = {
                user_id: user_id_temp,
                value_effort: selectedvalue, 
                value_type: "effort",
            };
            
            var url_direct = "/coachclass_save/'.arg(1).'/'.$reportdate.'/'.$year.'/'.$progress_report_id.'/'.$coachid.'/'.$role_id.'/'.$classid.'/'.$day.'/'.$week_no.'/save";
            
             //alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	$("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	

        });
        
    $(".dropdown-performance-real").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
    
    var user_id_temp = $(this).attr("name");
    user_id_temp = user_id_temp.replace("performance_real[", "");
    user_id_temp = user_id_temp.replace("]", "");
    
    var selectedvalue = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
    
    var postdata = {
                user_id: user_id_temp,
                value_performance: selectedvalue,
                value_type: "performance",
            };
            
            var url_direct = "/coachclass_save/'.arg(1).'/'.$reportdate.'/'.$year.'/'.$progress_report_id.'/'.$coachid.'/'.$role_id.'/'.$classid.'/'.$day.'/'.$week_no.'/save";
            
             alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	$("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	

        });    
    
    });
</script>';
  
        $output .= '<div class="skil-badge11 skil-badge11_above"><div style="display:inline-block">';
        $output .= '<form name="f2" action="'.$base_url.'/addmoregymnast" method="post">';
        $output .= '<input type="hidden" name="pdate" value="'.$reportdate.'">';
        $output .= '<input type="hidden" name="pbadge" value="'.$class.'">';
        $output .= '<input type="hidden" name="pcoach" value="'.$coachid.'">';
        $output .= '<input type="submit" name="Add Gymnast" value=" Add Gymnast ">';
	$output .= '</form>';
        $output .= '</div></div>';
	$output .= "<form class='gym-tid-badgee gym-tid-badgee1 ' name='f1' action='".$base_url."/savetotrack' method='post'>";
        $output .= '<div class="skil-badge11 "><div style="display:inline-block">';
	$output .= '<input type="submit" name="Save" value=" Save ">';
	$output .= '</div>';        
        $output .= '</div>';
        $output .= '<input type="hidden" name="pdate" value="'.$reportdate.'">
                    <input type="hidden" name="pbadge" value="'.$class.'">
                    <input type="hidden" name="pcoach" value="'.$coachid.'">';

	if (!$coachid) {
	//$output = '<div align="right" width="95%"><a onclick="callprint()" href="#" id="xpr">Print</a>&nbsp;&nbsp;</div>';
	$output .= '<div align="center" width="100%"><h2 style="font-size:17px">'.$badtxt.' - Attendance Register</h3></div>';
	$output .= '<div align="center" width="100%"><h4>'.date('l', strtotime($reportdate)).', '.date('dS F Y', strtotime($reportdate)).'</h4></div>';
	$output .= '<p style="height:0px">&nbsp;</p>';
	}
	//$output = '<div align="right" width="95%"><a onclick="callprint()" href="#" id="xpr">Print</a>&nbsp;&nbsp;</div>';
	
        
        
        //new table///////////////////////////////////////////
        
        
//        if ($coachid) {	  
//	  $output .= '<table border="0" class="capturetable progress-report-sheet" align="center" style="width:75%">';
//	} 
//	$output .= "<tr><th>#</th><th>Gymnast Name</th>
//			<th>Gender</th>
//			<th>Class<br>Length<br>Attended (Min)</th>
//			<th>Class<br>Length<br>Total (Min)</th>
//			<th>&nbsp;Coach&nbsp;</th>";
//	
//	if ($hideperform <= 0) {
//			$output .= "<th>Perform</th>";
//	}
//	if($class == 'GYM-Badge 1' || $class == 'GYM-Badge 2' || $class == 'SKIL-Badge'){
//	$output .= "<th>Effort</th>
//			<th width='40%'>Comments</th>
//			<th width='40%'>Current Badge</th>
//			</tr>";
//	}
//	else
//	{
//	$output .= "<th>Effort</th>
//			<th width='40%'>Comments</th>
//			
//			</tr>";
//	}
//                
//        $gym = 'GYM-Badge 1';        
//        $coachgroup = get_role_tables($gym, $coachid, $reportdate);
//        print_r($get_group);
//        
////        foreach ($coachgroup as $coachgroups){
//        $query = 'SELECT u.uid, u.name ' .
//            'FROM {users} AS u ' .
//            'JOIN {users_roles} AS ur ' .
//            'ON ur.uid = u.uid ' .       
//            'WHERE ur.rid = "'.$coachgroups[2].'"';
//            $res = db_query($query);
//            $role_id = $coachgroups[2];
//            $role_name = user_role_load_by_id($role_id);
//            
//            $output .= '<p style="text-align:left; width:75%"><b>'.$role_name. '</b> with group <b>'.$coachgroups[1].'</b></p> '
//            . '<table border="1" class="capturetable " align="center" style="width:75%">';
////            $output .= "<tr><th>#</th><th>Gymnast Name</th>
////                            <th>Gender</th>
////                            <th>Class<br>Length<br>(Min)</th>
////                            <th>Perform</th>
////                            <th>Effort</th>
////                            <th width='40%'>Comments</th>
////                            </tr>";
//            $counter = 1;
//            while($row = db_fetch_array($res)){ 
//                $u = user_load($row['uid']);
//                $group = $u->profile_class_category;
//                
//                $output .= '<tr class="'.'$sclass.$addto'.'" style="'.'$style'.'">
//
//			<td>'.'$counter'.'</td>'.
//			'<td>'.'$name'.'</td>'.
//			'<td>'.'$name'.'</td>'.
//                        '<td>'.'$name'.'</td>'.
//                        '<td>'.'$name'.'</td>'.
//                        '<td>'.'$name'.'</td>'.
//                        '<td>'.'$name'.'</td>'.
//                        '<td>'.'$name'.'</td>'.
//                        '<td>'.'$name'.'</td>'.
//                        '</tr>';
//            }
//        
//        
//        
////        }
//        $output .= '</table>';
        // New table close --------------------------------////
        
        
	if ($coachid) {
	  $output .= '	<p>&nbsp;</p><p style="text-align:left; width:75%">'.$badtxt.'</p>';
	  $output .= '<table border="0" class="capturetable progress-report-sheet" align="center" style="width:75%">';
	} else {
	  $output .= '<table border="0" class="capturetable" align="center">';
	}

	$output .= "<tr><th>#</th><th>Gymnast Name</th>
			<th>Gender</th>
			<th>Gymnast<br>Left<br>Early (Min)</th>
			<th>Class<br>Length<br>Total (Min)</th>";
			
	if ($class=='SKIL-Badge') {	
		$output .= "<th>&nbsp;Coach&nbsp;</th>";
	}else {
		$output .= "<th>&nbsp;Group&nbsp;</th>";
	}
	
	if ($hideperform <= 0) {
			$output .= "<th>Perform</th>";
	}
	if($class == 'GYM-Badge 1' || $class == 'GYM-Badge 2' || $class == 'SKIL-Badge'){
	$output .= "<th>Effort</th>
			<!--<th width='40%'>Comments</th>-->
			<th width='40%'>Current Badge</th>
			</tr>";
	}
	else
	{
	$output .= "<th>Effort</th>
			<!-- <th width='40%'>Comments</th>-->
			
			</tr>";
	}
	
	// Get overall scores and badges for the students
		$disable_class_total = false;
		if($class == 'GYM-Badge 1' || $class == 'GYM-Badge 2')		
		{	
			$overall_score_student = gym_badge_get_overall_score ();
			$disable_class_total = true;
			
		}
		else if($class == 'SKIL-Badge')
		{
		$overall_score_student = skill_badge_get_overall_score ();
		}
		
	$addto = "";
	$f = "profile_".$day;
    $counter = 1;
	
	$added = array();	

	$merged = array();
	if ($groupusers) {
		foreach ($groupusers as $guser => $x) {
			$merged[] = $guser;
		}
	}
	
	
	if ($uarray) {
			foreach ($uarray as $storedid => $xyz) {
				if (!in_array($storedid, $merged)) {
					$merged[] = $storedid;	
				}
			}
	}
	
	
	if ($merged)
	foreach($merged as $baduser) {
            
		$u = user_load($baduser);

		profile_load_profile($u);
		
		
		if ($coachid) {
			$ucoach = get_gymcoach_uid($u->uid);
			/*if ($ucoach != $coachid && !$uarray[$u->uid]) {
				continue;
			}*/
		}

		if ($counter % 2 == 0) {
            $sclass = 'even ';
        } else {
            $sclass = 'odd ';
        }
		if ($u->{$f}==0 && $addto=="") {
			$addto = " breakpoint";
		}
		if ($u->{$f}==0) {
			$other = "background-color:yellow";
		} else {
			$other = "";
		}

		$roles = array_values($u->roles);
		if (
				in_array('TID-Badge 1', $roles)
				|| in_array('TID-Badge 2', $roles)
				|| in_array('Elite', $roles)
		)
		{
			$name = strtoupper($u->profile_last_name." ".$u->profile_first_name);
		} else {
			$name = $u->profile_last_name." ".$u->profile_first_name;
		}

		$showleng = '';
		/*if ($uarray[$u->uid]['classtime']) {
			$showleng = $uarray[$u->uid]['classtime'];	
		} else {*/
			if (stristr($leng,'variable')) {
				$showleng = ''; // if variable
			} else {
				$showleng = $leng;			
			}
		/*}*/

		if($u->profile_gymnast_gender=="Male")
		{
			$gender_type = "boys";
		}
		else if($u->profile_gymnast_gender=="Female")
		{
			$gender_type = "girls";
		}
		
		$style = '';
		if ($_SESSION['postcheck'][$u->uid]) {
			$style = " background-color:red";
			unset($_SESSION['postcheck'][$u->uid]);
		}
		
                /// Row start -----------------------//
		if($class == 'GYM-Badge 1' || $class == 'GYM-Badge 2' || $class == 'TID')
		{
           		
		$output .= '<tr class="'.$sclass.$addto.'" style="'.$style.'">

			<td>'.$counter.'.</td>'.

			'<td>'.$name.'</td>'.

			'<td>'.$u->profile_gymnast_gender.'</td>'.
			
           '<td style= align="center">
             <select class="dropdown-counter" name="attendance['.$u->uid.']" id="attend_'.$u->uid.'">
             <option value=""></option>	
			';
             //$showleng1 =$showleng;
             $showleng1 = 0;
           while($showleng1<=30)
            {

				// set value saved in database
				if ( is_numeric($uarray[$u->uid]['attendance']) && ($uarray[$u->uid]['attendance'] == $showleng1) ) {
					$selected = " selected='selected' ";
				} else {
				
					$selected = "";
				}
           	  $output .= '<option value="'.$showleng1.'" '.$selected.'>'.$showleng1.'</option>';
           	 
           	  $showleng1 =$showleng1+5;
              if($showleng1 == 35)
           	  {	
           	 	 break;
           	  }
            }


			$output .= '</select>			

				</td> <td style= align="center">';
			
			if ($disable_class_total) {
				$output .= "<b>$showleng</b>";
			}else {
			
			$output .= '
             <select class="dropdown-counter" name="leng['.$u->uid.']" onchange="get_value(this.value,'.$u->uid.');">';
           while($showleng>=0)
            {

           	  //echo $showleng;
           	  // set value saved in database
				if (is_numeric ($uarray[$u->uid]['classtime']) && ($uarray[$u->uid]['classtime'] == $showleng ) ) {
					$selected = " selected='selected' ";
				} else $selected = "";

           	  $output .= '<option value="'.$showleng.'" rel="v'.$showleng.'"'.$selected. '>'.$showleng.'</option>';
           	 
           	  $showleng =$showleng-5;
              if($showleng == -5)
           	  {	
           	 	 break;
           	  }
            }
            
            


			$output .= '</select>';
			
			}
				

			$output .= '</td>'.

            

			// '<td style="padding:1px" align="center">
			// <div style="float:left;width:94px"><input type="text" name="leng['.$u->uid.']" size="3" value="'.$showleng.'">
			// </div>
            

			// </td>'.

		    '<td>'.$u->profile_class_category.'</td>'.

			(($hideperform <= 0) ? '<td>
							<select class="dropdown-counter" name="perform['.$u->uid.']">
									<option value="0">0</option>
									<option value="1" '.($uarray[$u->uid]['performance']==1?'selected="selected"':'').'>1</option>
									<option value="1.5" '.($uarray[$u->uid]['performance']==1.5?'selected="selected"':'').'>1.5</option>
									<option value="2" '.($uarray[$u->uid]['performance']==2?'selected="selected"':'').'>2</option>
									<option value="2.5" '.($uarray[$u->uid]['performance']==2.5?'selected="selected"':'').'>2.5</option>
									<option value="3" '.($uarray[$u->uid]['performance']==3?'selected="selected"':'').'>3</option>
									<option value="3.5" '.($uarray[$u->uid]['performance']==3.5?'selected="selected"':'').'>3.5</option>
									<option value="4" '.($uarray[$u->uid]['performance']==4?'selected="selected"':'').'>4</option>
									<option value="4.5" '.($uarray[$u->uid]['performance']==4.5?'selected="selected"':'').'>4.5</option>
									<option value="5" '.($uarray[$u->uid]['performance']==5?'selected="selected"':'').'>5</option>
							</select>
			</td>' : '').
			'<td>
							<select class="dropdown-counter" name="effort['.$u->uid.']">
									<option value="0" >--</option>
									<option value="0.5" '.($uarray[$u->uid]['performance_real']==1?'selected="selected"':'').'>0.5</option>
									<option value="1" '.($uarray[$u->uid]['performance_real']==1?'selected="selected"':'').'>1</option>
									<option value="1.5" '.($uarray[$u->uid]['performance_real']==1.5?'selected="selected"':'').'>1.5</option>
									<option value="2" '.($uarray[$u->uid]['performance_real']==2?'selected="selected"':'').'>2</option>
									<option value="2.5" '.($uarray[$u->uid]['performance_real']==2.5?'selected="selected"':'').'>2.5</option>
									<option value="3" '.($uarray[$u->uid]['performance_real']==3?'selected="selected"':'').'>3</option>
									<option value="3.5" '.($uarray[$u->uid]['performance_real']==3.5?'selected="selected"':'').'>3.5</option>
									<option value="4" '.($uarray[$u->uid]['performance_real']==4?'selected="selected"':'').'>4</option>
									<option value="4.5" '.($uarray[$u->uid]['performance_real']==4.5?'selected="selected"':'').'>4.5</option>
									<option value="5" '.($uarray[$u->uid]['performance_real']==5?'selected="selected"':'').'>5</option>
							</select>

			</td>';
			
			/* $output .= '<td>
				<select class="comment-box" name="comment['.$u->uid.']" id=comment->['.$u->uid.']>
					<option value = "0">----</option>
					<option value = "This is comment 1">This is comment 1</option>
					<option value = "This is comment 2">This is comment 2</option>
					<option value = "This is comment 3">This is comment 3</option>
					<option value = "This is comment 4">This is comment 4</option>
				
				</select>
				
				<!-- <input class="comment-box" type="text" name="comment['.$u->uid.']" size="20" value="'.$uarray[$u->uid]['coach_note'].'">
			</td>-->';*/
			
			$output .= '<td>

				'.gym_badge_get_badge ($overall_score_student[$u->uid]['badge']).'
					Update Diary:-<a href="/diarygymbadge/'.$u->uid.'/G/'.$gender_type.'" target=_blank class="badgeletter">G</a>&nbsp; &nbsp;<a href="/diarygymbadge/'.$u->uid.'/Y/'.$gender_type.'" target=_blank class="badgeletter">Y</a>&nbsp; &nbsp;<a href="/diarygymbadge/'.$u->uid.'/
M/'.$gender_type.'" target=_blank class="badgeletter">M</a>
			</td>
			</tr>';
			}
                        // Row end -------------- for gym badge 1 and 2--------//////////////////
			elseif($class == 'SKIL-Badge')
			{
				$output .= '<tr class="'.$sclass.$addto.'" style="'.$style.'">
			<td>'.$counter.'.</td>'.
			'<td style="'.$other.'">'.$name.'</td>'.
			'<td style="'.$other.'">'.$u->profile_gymnast_gender.'</td>'.
			'<td style= align="center">
             <select class="dropdown-counter" name="attendance['.$u->uid.']" id="attend_'.$u->uid.'">
             <option value=""></option>	
			';
           // $showleng = 60;
             $showleng1 =$showleng;
           while($showleng1>=0)
            {

				// set value saved in database
				if ( is_numeric($uarray[$u->uid]['attendance']) && ($uarray[$u->uid]['attendance'] == $showleng1) ) {
					$selected = " selected='selected' ";
				} else $selected = "";

           	  $output .= '<option value="'.$showleng1.'" '.$selected.'>'.$showleng1.'</option>';
           	 
           	  $showleng1 =$showleng1-5;
              if($showleng1 == -5)
           	  {	
           	 	 break;
           	  }
            }


			$output .= '</select>			

				</td>'.
			'<td style= align="center">
             <select class="dropdown-counter" name="leng['.$u->uid.']" onchange="get_value(this.value,'.$u->uid.');">

			';
           while($showleng>=0)
            {

           	  //echo $showleng;
           	  // set value saved in database
				if (is_numeric ($uarray[$u->uid]['classtime']) && ($uarray[$u->uid]['classtime'] == $showleng ) ) {
					$selected = " selected='selected' ";
				} else $selected = "";

           	  $output .= '<option value="'.$showleng.'" rel="v'.$showleng.'"'.$selected. '>'.$showleng.'</option>';
           	 
           	  $showleng =$showleng-5;
              if($showleng == -5)
           	  {	
           	 	 break;
           	  }
            }

			$coach_name = get_gymcoach($u->uid);

			$output .= '</select>
				
				

				</td>'.
		    '<td>'.$coach_name.'</td>'.
			(($hideperform <= 0) ? '<td>
							<select class="dropdown-counter" name="perform['.$u->uid.']">
									<option value=""></option>
									<option value="1" '.($uarray[$u->uid]['performance']==1?'selected="selected"':'').'>1</option>
									<option value="1.5" '.($uarray[$u->uid]['performance']==1.5?'selected="selected"':'').'>1.5</option>
									<option value="2" '.($uarray[$u->uid]['performance']==2?'selected="selected"':'').'>2</option>
									<option value="2.5" '.($uarray[$u->uid]['performance']==2.5?'selected="selected"':'').'>2.5</option>
									<option value="3" '.($uarray[$u->uid]['performance']==3?'selected="selected"':'').'>3</option>
									<option value="3.5" '.($uarray[$u->uid]['performance']==3.5?'selected="selected"':'').'>3.5</option>
									<option value="4" '.($uarray[$u->uid]['performance']==4?'selected="selected"':'').'>4</option>
									<option value="4.5" '.($uarray[$u->uid]['performance']==4.5?'selected="selected"':'').'>4.5</option>
									<option value="5" '.($uarray[$u->uid]['performance']==5?'selected="selected"':'').'>5</option>
							</select>
			</td>' : '').
			'<td>
							<select class="dropdown-counter" name="effort['.$u->uid.']">
									<option value="" ></option>
									<option value="1" '.($uarray[$u->uid]['performance_real']==1?'selected="selected"':'').'>1</option>
									<option value="1.5" '.($uarray[$u->uid]['performance_real']==1.5?'selected="selected"':'').'>1.5</option>
									<option value="2" '.($uarray[$u->uid]['performance_real']==2?'selected="selected"':'').'>2</option>
									<option value="2.5" '.($uarray[$u->uid]['performance_real']==2.5?'selected="selected"':'').'>2.5</option>
									<option value="3" '.($uarray[$u->uid]['performance_real']==3?'selected="selected"':'').'>3</option>
									<option value="3.5" '.($uarray[$u->uid]['performance_real']==3.5?'selected="selected"':'').'>3.5</option>
									<option value="4" '.($uarray[$u->uid]['performance_real']==4?'selected="selected"':'').'>4</option>
									<option value="4.5" '.($uarray[$u->uid]['performance_real']==4.5?'selected="selected"':'').'>4.5</option>
									<option value="5" '.($uarray[$u->uid]['performance_real']==5?'selected="selected"':'').'>5</option>
							</select>

			</td>'.
			'<td>
								<input class="comment-box" type="text" name="comment['.$u->uid.']" size="20" value="'.$uarray[$u->uid]['coach_note'].'">
			</td>'.
			'<td>
			'.skill_badge_get_badge ($overall_score_student[$u->uid]['badge']).'
					Update Diary:-<a href="/captureskillbadge/'.$u->uid.'/S/'.$gender_type.'" target=_blank>S</a>&nbsp;<a href="/captureskillbadge/'.$u->uid.'/K/'.$gender_type.'" target=_blank>K</a>&nbsp;<a href="/captureskillbadge/'.$u->uid.'/
M/'.$gender_type.'" target=_blank>I</a>&nbsp;<a href="/captureskillbadge/'.$u->uid.'/L/'.$gender_type.'" target=_blank>L</a>
			</td>
			</tr>';
			}
			else
			{
			$output .= '<tr class="'.$sclass.$addto.'" style="'.$style.'">
			<td>'.$counter.'.</td>'.
			'<td style="'.$other.'">'.$name.'</td>'.
			'<td style="'.$other.'">'.$u->profile_gymnast_gender.'</td>'.
			'<td align="center">
				<div style="float:left;width:94px"><input type="text" name="attendance['.$u->uid.']" size="3" value="'.$uarray[$u->uid]['attendance'].'">
				</div></td>'.
			'<td align="center">
			<div style="float:left;width:94px"><input type="text" name="leng['.$u->uid.']" size="3" value="'.$showleng.'">
			</div></td>'.
		    '<td>'.get_gymcoach($u->uid).'</td>'.
			(($hideperform <= 0) ? '<td>
							<select name="perform['.$u->uid.']">
									<option value="0">0</option>
									<option value="1" '.($uarray[$u->uid]['performance']==1?'selected="selected"':'').'>1</option>
									<option value="1.5" '.($uarray[$u->uid]['performance']==1.5?'selected="selected"':'').'>1.5</option>
									<option value="2" '.($uarray[$u->uid]['performance']==2?'selected="selected"':'').'>2</option>
									<option value="2.5" '.($uarray[$u->uid]['performance']==2.5?'selected="selected"':'').'>2.5</option>
									<option value="3" '.($uarray[$u->uid]['performance']==3?'selected="selected"':'').'>3</option>
									<option value="3.5" '.($uarray[$u->uid]['performance']==3.5?'selected="selected"':'').'>3.5</option>
									<option value="4" '.($uarray[$u->uid]['performance']==4?'selected="selected"':'').'>4</option>
									<option value="4.5" '.($uarray[$u->uid]['performance']==4.5?'selected="selected"':'').'>4.5</option>
									<option value="5" '.($uarray[$u->uid]['performance']==5?'selected="selected"':'').'>5</option>
							</select>
			</td>' : '').
			'<td>
							<select name="effort['.$u->uid.']">
									<option value="0" >0</option>
									<option value="1" '.($uarray[$u->uid]['performance_real']==1?'selected="selected"':'').'>1</option>
									<option value="1.5" '.($uarray[$u->uid]['performance_real']==1.5?'selected="selected"':'').'>1.5</option>
									<option value="2" '.($uarray[$u->uid]['performance_real']==2?'selected="selected"':'').'>2</option>
									<option value="2.5" '.($uarray[$u->uid]['performance_real']==2.5?'selected="selected"':'').'>2.5</option>
									<option value="3" '.($uarray[$u->uid]['performance_real']==3?'selected="selected"':'').'>3</option>
									<option value="3.5" '.($uarray[$u->uid]['performance_real']==3.5?'selected="selected"':'').'>3.5</option>
									<option value="4" '.($uarray[$u->uid]['performance_real']==4?'selected="selected"':'').'>4</option>
									<option value="4.5" '.($uarray[$u->uid]['performance_real']==4.5?'selected="selected"':'').'>4.5</option>
									<option value="5" '.($uarray[$u->uid]['performance_real']==5?'selected="selected"':'').'>5</option>
							</select>

			</td>'.
			'<td>
								<input type="text" name="comment['.$u->uid.']" size="20" value="'.$uarray[$u->uid]['coach_note'].'">
			</td>
			</tr>';
			}
			
			$added[] = $u->uid;
		if ($addto!="") {
			$addto = "x";		
		}
		$counter++;
	}

	if ($postdata['selected_users']) {
		//print_r($postdata['selected_users']); exit;
	foreach ($postdata['selected_users'] as $badid => $v) {
		$u = user_load($badid);
		profile_load_profile($u);
		
		$showleng = '';
		if ($uarray[$u->uid]['classtime']) {
			$showleng = $uarray[$u->uid]['classtime'];	
		} else {
			if (stristr($leng,'variable')) {
				$showleng = ''; // if variable
			} else {
				$showleng = $leng;			
			}
		}
		if ($_SESSION['postcheck'][$u->uid]) {
			$style = " background-color:red";
			unset($_SESSION['postcheck'][$u->uid]);
		}

		if (in_array($u->uid,$added)) 
			continue;
		/*if ($coachid) {
			$ucoach = get_gymcoach_uid($u->uid);
			if ($ucoach != $coachid) {
				continue;
			}
		}*/

		if ($counter % 2 == 0) {
            $sclass = 'even ';
        } else {
            $sclass = 'odd ';
        }
		
		$other = "";
		
		$roles = array_values($u->roles);
		if (
				in_array('TID-Badge 1', $roles)
				|| in_array('TID-Badge 2', $roles)
				|| in_array('Elite', $roles)
		)
		{
			$name = strtoupper($u->profile_last_name." ".$u->profile_first_name);
		} else {
			$name = $u->profile_last_name." ".$u->profile_first_name;
		}
		$output .= '<tr class="'.$sclass.$addto.'">
			<td>'.$counter.'.</td>'.
			'<td style="'.$other.'">'.$name.'</td>'.
			'<td style="'.$other.'">'.$u->profile_gymnast_gender.'</td>'.
				'<td align="center">
				<div style="float:left;width:94px"><input type="text" name="attendance['.$u->uid.']" size="3" >
				</div></td>'.
			'<td align="center">
			<div style="float:left;width:94px"><input type="text" name="leng['.$u->uid.']" size="3" value="'.$showleng.'">
			</div></td>'.
			'<td>'.get_gymcoach($u->uid).'</td>'.
			(($hideperform <= 0) ?'<td style="padding:1px" >
							<select name="perform['.$u->uid.']">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="1.5">1.5</option>
									<option value="2">2</option>
									<option value="2.5">2.5</option>
									<option value="3">3</option>
									<option value="3.5">3.5</option>
									<option value="4">4</option>
									<option value="4.5">4.5</option>
									<option value="5">5</option>
							</select>
			</td>' : '').
			'<td>
							<select name="effort['.$u->uid.']">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="1.5">1.5</option>
									<option value="2">2</option>
									<option value="2.5">2.5</option>
									<option value="3">3</option>
									<option value="3.5">3.5</option>
									<option value="4">4</option>
									<option value="4.5">4.5</option>
									<option value="5">5</option>
							</select>

			</td>'.
			
			'<td>
								<input type="text" name="comment['.$u->uid.']" size="20">
			</td></tr>';
		if ($addto!="") {
			$addto = "x";		
		}
		$counter++;
	}
	}

	if ($postdata['gymstudents']) {
		$gymstudents = explode(',', $postdata['gymstudents']);
		$select = '<select name="student[x]"><option value="">--Select Gymnast--</option>';
		foreach ($gymstudents as $studentid) {
			if ($studentid) {
				$u = user_load($studentid);


				profile_load_profile($u);
				$roles = array_values($u->roles);
				if (
						in_array('TID-Badge 1', $roles)
						|| in_array('TID-Badge 2', $roles)
						|| in_array('Elite', $roles)
				)
				{
					$name = strtoupper($u->profile_last_name." ".$u->profile_first_name);
				} else {
					$name = $u->profile_last_name." ".$u->profile_first_name;
				}
				$select .= '<option value="'.$u->uid.'">'.$name.'</option>';
			}
		}
		$select .= '</select>';

		if ($counter % 2 == 0) {
            $sclass = 'even ';
        } else {
            $sclass = 'odd ';
        }
		
		$other = "";
		
		$showleng = '';
		if ($uarray[$u->uid]['classtime']) {
			$showleng = $uarray[$u->uid]['classtime'];	
		} else {
			if (stristr($leng,'variable')) {
				$showleng = ''; // if variable
			} else {
				$showleng = $leng;			
			}
		}

		if ($_SESSION['postcheck'][$u->uid]) {
			$style = " background-color:red";
			unset($_SESSION['postcheck'][$u->uid]);
		}

		$output .= '<tr class="'.$sclass.$addto.'">
			<td>'.$counter.'.</td>'.
			'<td style="'.$other.'">'.$select.'</td>'.
			'<td style="'.$other.'"></td>'.

			'<td align="center">
			<div style="float:left;width:94px"><input type="text" name="attendance[x]" size="3" ></div></td>'
			.
			'<td align="center">
			<div style="float:left;width:94px"><input type="text" name="leng[x]" size="3" value="'.$showleng.'">
			</div></td>'.

			'<td>'.get_gymcoach($u->uid).'</td>'.
					(($hideperform <= 0) ? '<td style="padding:1px" >
							<select name="perform[x]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="1.5">1.5</option>
									<option value="2">2</option>
									<option value="2.5">2.5</option>
									<option value="3">3</option>
									<option value="3.5">3.5</option>
									<option value="4">4</option>
									<option value="4.5">4.5</option>
									<option value="5">5</option>
							</select>
			</td>' : '').
			'<td style="padding:1px">
							<select name="effort[x]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="1.5">1.5</option>
									<option value="2">2</option>
									<option value="2.5">2.5</option>
									<option value="3">3</option>
									<option value="3.5">3.5</option>
									<option value="4">4</option>
									<option value="4.5">4.5</option>
									<option value="5">5</option>
							</select>

			</td>'.
			'<td style="padding:1px">
								<input type="text" name="comment[x]" size="20">
			</td></tr>';
	
		
	
	
	}
	$output .= '<tr>
		<td>&nbsp;</td>'.
		'<td>&nbsp;</td>'.
		'<td>&nbsp;</td>'.
		'<td>&nbsp;</td>'.
		'<td>&nbsp;</td>'.
		'<td>&nbsp;</td>'.
		(($hideperform <= 0) ?
		'<td>&nbsp;</td>':'').
		'<td>&nbsp;</td>'.
		'<td>&nbsp;</td></tr>';
	

	$output .= "</table>";

	$output .= '<div class="skil-badge11 "><div style="display:inline-block">';
	$output .= '<input type="submit" name="Save" value=" Save ">';
	$output .= '</div>';
	if ($disable_class_total) {
		$output .= '<input type=hidden name=classlength value='.$leng.'>';
		
	}
	$output .= "</form>";

	$output .= '<div style="display:inline-block">';
        $output .= '<form name="f2" action="'.$base_url.'/addmoregymnast" method="post">';
        $output .= '<input type="hidden" name="pdate" value="'.$reportdate.'">';
        $output .= '<input type="hidden" name="pbadge" value="'.$class.'">';
        $output .= '<input type="hidden" name="pcoach" value="'.$coachid.'">';
        $output .= '<input type="submit" name="Add Gymnast" value=" Add Gymnast ">';
	$output .= '</form>
	</div>';

	
	/*$output .= '<div style="float:left">&nbsp;
	<a href="'.$base_url.'">Return to my list of classes for the day (NB Click "SAVE" before clicking this link!)</a></div>';*/

	$output .= '<div style="display:inline-block">&nbsp;
	<a href="'.$base_url.'">Click here to return to my list of classes for the day<span>(NB Click "SAVE" button before clicking this link, leaving this web page, or closing your browser)</span></a></div></div>';
	
	
	if ($coachid) {
	$output .= "<script> function callprint() { 
		
			jQuery('.header').hide();
			jQuery('.leftblock').hide();
			jQuery('#footer').hide();
			document.getElementById('xpr').style.display='none';
			window.print();
		
		}</script>";
	}

	return $output;
	//exit;
}

function addmoregymnast() {

$pdate = $_POST['pdate'];
$pbadge = $_POST['pbadge'];
$pcoach = $_POST['pcoach'];

global $base_url;
//$output = "<form name='f1' action='".$base_url."/coachclass/".$pbadge."' method='post'>";
	$output .= drupal_get_form('addmorestudent_form', $pbadge, $pdate, $pcoach);
//	$output .= "<div><input type='submit' name='Add Selected' value=' Add Selected '></div>";
//$output .= '</form>';
return $output;

}


function addmorestudent_form($form_state, $class, $reportdate, $coachid) {
    $reportdate = date("Y-m-d");
//    print_r($reportdate);print 'dssdsdsd';exit;
	$fullday = date("l", strtotime($reportdate));        
	$day = strtolower($fullday);
	$roleid2 = FALSE;
	$break = '';
	/*if ($class=='GYM-Badge 1') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 1');
	}
	if ($class=='GYM-Badge 2') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 2');
	}*/
	if ($class=='TID') {
		$roleid2 = printclasslists_extract_role_id('TID');
	}
	if ($class=='SKIL-Badge') {
		$roleid2 = printclasslists_extract_role_id('Elite');
	}

	$roles = user_roles(false);
    foreach ($roles as $key => $value) {       
            if ($value == $class) {                        
                $roleid = $key;
                $rolevalue = $value;
                break;
           }
    }    
        $class = 'GYM-Badge 1';
//        print_r($reportdate);
	$arr_students = printclasslists_return_users(null, $key, $roleid2, $day, &$break, $class, $reportdate);

	$form = array();
	$form['#action'] = "coachclass/".$class;
	$form['#method'] = 'post';
//        $output .= '<input type="submit" name="Save" value=" Save ">';
        $form['save1'] = array(
        '#type' => 'submit',
        '#value' => t('Add Gymnast'),
        '#prefix' => '<div class="skil-badge11 "><div style="display:inline-block">',
        '#suffix' => '</div></div>',
        );
        $form['tag1'] = array('#type' => 'markup', '#value' => '<table border=0 class=capturetable><tr><th>Gymnast Name</th><th width="30%">Coach</th><th>Select</th></tr>');
        $counter = 1;

	$query = "select * from gym_badge_save where badclass='".$class."' and baddate='".$reportdate."'";
	$badresult = db_query($query);
	$usercheck = array();
	while ($badrow = db_fetch_array($badresult)) {
		$usercheck[$badrow['baduser']] = 1;
	}

	global $base_url;
	$gymstudent = '';
    foreach ($arr_students as $row) {
        if ($counter % 2 == 0) {
            $class = 'even';
        } else {
            $class = 'odd';
        }
        // build fields
        if ($counter == $break && $counter != 1) {
            $class .= ' breakpoint';
            $is_checked = 'No';
        } else {
            
        }
        $form["row-" . $row['uid']] = array('#type' => 'markup', '#value' => '<tr class="' . $class . '">');
        
		$form["name-" . $row['uid']] = array(
            '#type' => 'markup',
            '#value' => "<td class='name'>
					" . $row['profile_values_profile_last_name_value'] . ", " . $row['profile_values_profile_first_name_value'] . "</td>"
        );

		$coachnm = explode(",", $row['coach']);
		$rnm = "";
		if ($coachnm[1]) {
			$rnm = $coachnm[1];
		}

		$gymstudent = $gymstudent . ',' . $row['uid'];
		$form["gymstudents"] = array(
            '#type' => 'hidden',
            '#value' => $gymstudent 
        );

		$form["gym-" . $row['uid']] = array(
            '#type' => 'markup',
            '#value' => "<td class='name'>" . $rnm . "</td>"
        );
        $pnode = node_load(array("nid" => arg(1)));
        $day_of_the_week = date('l', strtotime(str_replace('T', ' ', $pnode->field_pr_date[0]['value'])));
        $selectedDay = strtolower($day_of_the_week); 
        // Update is checked true if gymnast have class of selected date 
        $arrDefaultValue = array($attendanceprogress[$row['uid']]['attendance'], $is_checked); 
        if (count($usercheck) > 0) {
			
		   if ($is_checked=='No') {
			//$rowback = 'background-color:yellow';
		   } else {
			$rowback = '';
		   }
		   /*if ($usercheck[$row['uid']]) {
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					//'#default_value' => $arrDefaultValue,
					'#prefix' => '<td style="'.$rowback.'" align=center>',
					'#suffix' => '</td>',
					'#checked' => TRUE,
				);
			} else {
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					'#prefix' => '<td class=is-train-on-' . $selectedDay . 'ss align=center>',
					'#suffix' => '</td>',
					'#checked' => FALSE,
				);
			}*/
			


		} else {
			/*if ($is_checked == 'No') {
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					'#prefix' => '<td class=is-train-on-' . $selectedDay . ' align=center>',
					'#suffix' => '</td>',
					'#checked' => FALSE,
				);
			} else {
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					'#default_value' => $arrDefaultValue,
					'#prefix' => '<td class=is-train-on-' . $selectedDay . ' align=center>',
					'#suffix' => '</td>',
					'#checked' => TRUE,
				);
			}*/

        }

		$form["selected_users[".$row['uid']."]"] = array(
					'#type' => 'checkbox',
					//'#default_value' => $row['uid'],
					'#prefix' => '<td style="'.$rowback.'" align=center>',
					'#suffix' => '</td>',
					'#checked' => FALSE,
		);
	
	
        $form["rowclose-" . $row['uid']] = array('#type' => 'markup', '#value' => '</tr>');
        $counter++;
    }
    $form['tagend'] = array('#type' => 'markup', '#value' => '</table>');
    $form['save'] = array(
        '#type' => 'submit',
        '#value' => t('Add Gymnast'),
        '#prefix' => '<div class="skil-badge11 "><div style="display:inline-block">',
        '#suffix' => '</div></div>',
    );
  
    return $form;
}




/* MAIN CONFIGURATION OVER */
function printclasslists_capture_form_submit($form, &$form_state) {

        $report_date = arg(2);            
        $date = date("Y-m-d", strtotime($report_date));
        $fullday = date("l", strtotime($report_date));                
        $day = strtolower($fullday);
        
        $roles = user_roles(false);        
        $class = arg(1);       
        $url_id = $class.'/'.$report_date = arg(2);    
        foreach ($roles as $key => $value) {       
            if ($value == $class) {                        
                $keyRoles = $key;
                $rolevalue = $value;
                break;
           }
        }
		
		switch ($day) {
			case 'monday':
				$day_id = 33;
				break;
			case 'tuesday':
				$day_id = 34;
				break;
			case 'wednesday':
				$day_id = 35;
				break;
			case 'thursday':
				$day_id = 36;
				break;
			case 'friday':
				$day_id = 37;
				break;
			case 'saturday':
				$day_id = 38;
				break;
			case 'sunday':
				$day_id = 39;
				break;
			case 'unknown':
				$day_id = 40;
				break;
		}
		
		if ($form_state['values']['op'] == 'Print') {
			$action = 'print';
		} else {
			$action = 'save';
		}

		$query = "select count(*) as badcount from gym_badge_save where badclass='".$class."' and baddate='".$report_date."'";
		$badcount = db_fetch_array(db_query($query));
		if (isset($badcount['badcount']) && $badcount['badcount'] > 0) {
			$query = "delete from gym_badge_save where badclass='".$class."' and baddate='".$report_date."'";
			db_query($query);
		}

		foreach ($form_state['values'] as $key => $value) {
			if (strstr($key, "is-train-on") && $form_state['values'][$key]=="1") {
				$uid = substr($key, strrpos($key, '-') + 1);
				$query = "insert into gym_badge_save(badclass,baddate,baduser) values ('".$class."','".$report_date."','".$uid."')";
				db_query($query);
			}
		}
		/*foreach ($form_state['values'] as $key => $value) {
			$value = trim($value);

			if ($form_state['values']['op'] == 'Print') {
				$action = 'print';
			} else {
				$action = 'save';
			}

			if (substr($key, 0, 11) == 'is-train-on') {
				$pos_selected_gymnast = strpos($key, "is-train-on");
				if ($pos_selected_gymnast === false) {
					
				} else {
					$value = trim($value);
					$uid = substr($key, strrpos($key, '-') + 1);
					// $arr[$uid][$key] = $value;
					$arr[$uid]['is-train-on-' . $day . '-' . $uid] = $value;               
					printclasslists_update('is-train-on-' . $day . '-' . $uid, $value, $uid, $action, $node_id, $keyRoles, $day_id);
				}
			}
		} */  
		
		drupal_set_message(t('User List updated for the date ('.$report_date.')'));   
		if ($action == 'print') {
			drupal_goto('printclasslists/' . $url_id, array("print"=>1));
		} else {
			drupal_goto('printclasslists/' . $url_id);
		}
}


/*function printclasslists_update($users_day, $profile_values_of_selected_day, $user_id, $formAction, $node_id, $role_id, $day_id) {  
    $query = "UPDATE profile_values PV, users U, users_roles UR SET PV.value = {$profile_values_of_selected_day} WHERE 
    PV.fid = {$day_id} AND 
    PV.uid = U.uid AND 
    U.uid = UR.uid AND
    UR.rid = {$role_id} AND
    u.UID = {$user_id}"; 
	if ($query) {        
        db_query($query);
    }
}*/


function printclasslists_coach_table($attendanceprogress, $arr_students, $break, $pnode, $cnode, $roleid) {


	if ($arr_students) {
			 $carray = array();
			 $coacharray = array();
			 foreach ($arr_students as $row) {
					if ($row['coach']!="") {
						if ($carray[$row['coachid']]) {
							$carray[$row['coachid']]++; 
						} else {
							$carray[$row['coachid']]=1;
						}
						$coacharray[$row['coachid']] = $row['coach'];
					}
			 }
			 $arg1 = arg(1);
			 $out = '';
			 if ($carray && !strstr($arg1,"FUN")) {
					$out .= '<b>Coaches:</b> <br><table border=0 class=capturetable>
					<tr><th>Coaches Name</th><th>Number of students<br> for this class</th><th>Number of Students<br> per Coach</th></tr>';
					$c = 1;
					foreach ($carray as $nm => $count) {
						if ($c % 2 == 0) {
							$class = 'even';
						} else {
							$class = 'odd';
						}
						$out .= '<tr class="' . $class . '">';

						$out .= "<td class='name'>" . $coacharray[$nm] . "</td>";
						
						$out .= "<td>" . $count . "</td>";
						
						$out .= "<td>" . get_coach_total_students($nm) . "</td>
						
						</tr>";
						
						$c++;
					}
					$out .= '</table><br>';
   					
			 }
	}
	return $out;
}


function get_coach_total_students($cid) {

	$total = db_fetch_array(db_query('select count(u.uid) as count from users u, content_type_profile cp, node n where cp.nid=n.nid and 
	u.uid=n.uid and cp.field_gymcoach_uid="'.$cid.'"'));

	return $total['count'];
}

function get_students_for_coach ($cid) {
	$query = "SELECT u.uid from users u, content_type_profile cp, node n where cp.nid=n.nid and u.uid=n.uid and cp.field_gymcoach_uid=".$cid;
	
	$result = db_query ($query);
	
	return $result;
}

function printclasslists_capture_form($form_state, $attendanceprogress, $arr_students, $break, $pnode, $cnode, $roleid, $coachid) {
//    print '<pre>';print_r($arr_students);exit; 
    if ($roleid == 16 OR $roleid == 12) { // SKIL-Badge or Elite page
        $display_performance_real = true;
    } else {
        $display_performance_real = false;
    }

    if ($display_performance_real) {
        $form['tag1'] = array('#type' => 'markup', '#value' => '<table border=0 class=capturetable><tr><th>Gymnast Name</th><th width="30%">Group</th><th>Select</th></tr>');
    } else {
        // Updated By Rahul Shingal
        $form['tag1'] = array('#type' => 'markup', '#value' => '<table border=0 class=capturetable><tr><th>Gymnast Name</th><th width="30%">Group</th><th>Select</th></tr>');
    }
    $rid = printclasslists_extract_role_id($cnode->field_c_type[0]['value']);
    $counter = 1;

	$query = "select * from gym_badge_save where badclass='".$attendanceprogress['class']."' and baddate='".$attendanceprogress['date']."'";
//         print $query;exit;
	$badresult = db_query($query);
//        print_r($query);
	$usercheck = array();
	while ($badrow = db_fetch_array($badresult)) {
//            print '<pre>';print_r($badrow);print '</pre>';    
		$usercheck[$badrow['baduser']] = 1;                
	}

	global $base_url;
    foreach ($arr_students as $row) {
        if ($counter % 2 == 0) {
            $class = 'even';
        } else {
            $class = 'odd';
        }
        // build fields
        if ($counter == $break && $counter != 1) {
            $class .= ' breakpoint';
            $is_checked = 'No';            
        } else {
            
        if($row['user_multi_role'] == 'Trial'){
            $trialrole = ' trialrole_cls';
        }else{
            $trialrole = '';
        }
        
        }
        $form["row-" . $row['uid']] = array('#type' => 'markup', '#value' => '<tr class="' . $class . $trialrole. '">');

		$form["name-" . $row['uid']] = array(
            '#type' => 'markup',
            '#value' => "<td class='name'>
					<a href='".$base_url."/user/".$row['uid']."/edit?destination=printclasslists/".arg(1).'/'.arg(2)."' target='_blank'>" . $row['profile_values_profile_last_name_value'] . ", " . $row['profile_values_profile_first_name_value'] ."</a></td>"
        );

		$coachnm = explode(",", $row['coach']);
		$rnm = "";
		if ($coachnm[1]) {
			$rnm = $coachnm[1];
		}

		$form["gym-" . $row['uid']] = array(
            '#type' => 'markup',
            '#value' => "<td class='name'>" . $row['category'] . "</td>"
        );
        $pnode = node_load(array("nid" => arg(1)));
        $day_of_the_week = date('l', strtotime(str_replace('T', ' ', $pnode->field_pr_date[0]['value'])));
        $selectedDay = strtolower($day_of_the_week); 
        // Update is checked true if gymnast have class of selected date 
        $arrDefaultValue = array($attendanceprogress[$row['uid']]['attendance'], $is_checked); 
        
        if (count($usercheck) > 0) {
		   if ($is_checked=='No') {
			$rowback = 'background-color:yellow';
		   } else {
			$rowback = '';
		   }
		   if ($usercheck[$row['uid']]) {
                       
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					'#default_value' => $arrDefaultValue,
					'#prefix' => '<td style="'.$rowback.'" align=center>',
					'#suffix' => '</td>',
					'#checked' => TRUE,
				);
			} else {
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					'#prefix' => '<td class=is-train-on-' . $selectedDay . 'ss align=center>',
					'#suffix' => '</td>',
					'#checked' => FALSE,
				);
			}

		} else {

			if ($is_checked == 'No') {
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					'#prefix' => '<td class=is-train-on-' . $selectedDay . ' align=center>',
					'#suffix' => '</td>',
					'#checked' => FALSE,
				);
			} else {
				$form["is-train-on-$selectedDay-" . $row['uid']] = array(
					'#type' => 'checkbox',
					'#default_value' => $arrDefaultValue,
					'#prefix' => '<td class=is-train-on-' . $selectedDay . ' align=center>',
					'#suffix' => '</td>',
					'#checked' => TRUE,
				);
			}
        }
		$form['pid'] = array('#type' => 'value', '#value' => $pnode->nid);
        $form['roleid'] = array('#type' => 'value', '#value' => $rid);
        $form['role'] = array('#type' => 'value', '#value' => $cnode->field_c_type[0]['value']);
        $form['cid'] = array('#type' => 'value', '#value' => $cnode->nid);
        $form['progresstitle'] = array('#type' => 'value', '#value' => $pnode->title);
        $form['classtitle'] = array('#type' => 'value', '#value' => $cnode->title);
        //$form['users_id']['is-train-on-'.$selectedDay.'-'][] = array('#type' => 'value', '#value' => $row['uid']);
        $form["rowclose-" . $row['uid']] = array('#type' => 'markup', '#value' => '</tr>');
        $counter++;
    }
    $form['tagend'] = array('#type' => 'markup', '#value' => '</table>');
    $form['save'] = array(
        '#type' => 'submit',
        '#value' => t('Save'),
    );
    $form['print'] = array(
        '#type' => 'submit',
        '#value' => t('Print'),
    );
    return $form;
}

function get_user_first_last ($uid) {
	$c = user_load($uid);
	profile_load_profile($c);
	if ($c) {
		return $c->profile_first_name." ".$c->profile_last_name;
	}else return false;
}

function get_gymcoach($uid) {

	$sql = "select nid from node where type='profile' and status=1 and uid='".$uid."'";
	//print $sql."<br />";
	
	$nid = db_result(db_query($sql));
	if ($nid) {
		$nd = node_load($nid);
		if ($nd->field_gymcoach[0]['uid']) {
			$c = user_load($nd->field_gymcoach[0]['uid']);
			profile_load_profile($c);
			return $c->profile_last_name.", ".$c->profile_first_name;
		}
	}else return false;
}

function get_gymcoach_uid($uid) {

	$sql = "select nid from node where type='profile' and status=1 and uid='".$uid."'";
	$nid = db_result(db_query($sql));
	if ($nid) {
		$nd = node_load($nid);
		if ($nd->field_gymcoach[0]['uid']) {
			$c = user_load($nd->field_gymcoach[0]['uid']);
			return $c->uid;
		}
	}
}


function printclasslists_getdatelistform($form_state, $class) {
//print "class: ".$class;
    /*$sql = "SELECT node.nid AS nid,
	node_data_field_pr_c_type.field_pr_c_type_value AS node_data_field_pr_c_type_field_pr_c_type_value,	
	node.type AS node_type,
	node.vid AS node_vid,
	node.title AS node_title,
	node_data_field_pr_date.field_pr_date_value AS node_data_field_pr_date_field_pr_date_value
	FROM node node 
	LEFT JOIN content_type_progressreport node_data_field_pr_c_type ON node.vid = node_data_field_pr_c_type.vid
	LEFT JOIN content_field_pr_date node_data_field_pr_date ON node.vid = node_data_field_pr_date.vid
	WHERE (node.type in ('progressreport')) AND (node.status = 1) AND node_data_field_pr_c_type.field_pr_c_type_value = '{$class}'
	ORDER BY node_data_field_pr_date_field_pr_date_value DESC";
    $result = db_query($sql);*/
    $path = drupal_get_path('module', 'printclasslists');
    drupal_add_css($path . '/css/smoothness/jquery-ui.css', 'module', 'all', FALSE);
    drupal_add_js($path . '/js/jquery-1.9.1.js');
    drupal_add_js($path . '/js/jquery-ui.js');
    drupal_add_js($path . '/js/jquery-classlist-toggle.js');
    drupal_add_js("jQuery(document).ready(function () {                                        
                    jQuery('#edit-datepicker,#edit-datepicker-1,#edit-datepicker-2,#edit-datepicker-3,#edit-datepicker-4,#edit-datepicker-5,#edit-datepicker-6').datepicker({
                        //dateFormat: 'd MM yy', 
                        dateFormat: 'yy-mm-dd',
						minDate: 0, 
                        onClose: function() {                        
                        var date = jQuery('#edit-datepicker').val();
                        if (date) {                                               
                            jQuery('#edit-datepicker-hidden').val(date);
                        }
                    }
                    })
		});", "inline");
    

	$form['tag1'] = array('#type' => 'markup', '#value' => '<table border=0 class="funbadge10"><tr><td>');

    //$dropdown_array = array('0' => '--- Select ---');   
	$form["amit"] = array('#type' => 'hidden','#value' => $class,'#attributes' => array('class' => 'db-hidden-date'));

    /*while (($data = db_fetch_object($result)) !== FALSE) {
        $key = $f>nid;
        $value = $data->node_title;        
        //$dropdown_array[$key] = $value;
        $form[$key] = array('#type' => 'hidden','#value' => $value,'#attributes' => array('class' => 'db-hidden-date'));
    }*/
    $form['datepicker'] = array(        
      '#type' => 'textfield',
      '#title' => 'Select Date',
      //'#maxlength' => 25,
      '#size' => 16,     
      '#attributes' => array('readonly' => 'readonly')
    ); 
                
    $form['datepicker-hidden'] = array(        
      '#type' => 'hidden',
      '#attributes' => array('class' => 'hidden-date')
    );
    
	$form['tag2'] = array('#type' => 'markup', '#value' => '</td><td style="padding-top:14px;padding-left:5px">');
	//unset($dropdown_array);
    $form['submit'] = array(
        '#type' => 'submit',
        '#value' => t('View Class List')
    );

	$form['tag3'] = array('#type' => 'markup', '#value' => '</td></tr></table>');
	
    return $form;
}


//  *********************** 11th March start ************************* //

function printclasslists_getdateselectforweek($form_state, $class, $gender='Boys') {
   
    global $base_url;        
    
    //----------------------- 1st table starts ----------------------------------//
    
    $query = 'SELECT u.uid, u.name ' .
       'FROM {users} AS u ' .
       'JOIN {users_roles} AS ur ' .
       'ON ur.uid = u.uid ' .       
       'WHERE ur.rid = 14' ;
    
    $res = db_query($query);
        $data_name = array();
        while($row = db_fetch_array($res)){   
            $uid = $row['uid'];
            $data_name[] = $row['name'];                      
            $data[] = array($row['name'], $row['uid']); 
        }

        $form["tag1"] = array('#type' => 'hidden','#value' => $class,'#attributes' => array('class' => 'db-hidden-date'));
        $form["tag2"] = array('#type' => 'hidden','#value' => $gender,'#attributes' => array('class' => 'db-hidden-gender'));
    $option = '';
       if(date('l') == 'Monday')
       {	
          // echo 'monday'; get_week_num($todaydate);
          
         for($i=0;$i<10;$i++)
         {
            $str1 = '+'.$i.' week';  
            $option[] = array(date('Y-m-d', strtotime('Monday',strtotime($str1))) => date('l Y-m-d', strtotime('Monday',strtotime($str1)))); 
         }	
           
         
         foreach ($option as $key => $value)
             {
                 foreach ($value as $key1 => $value1)
                 {
                    $itskey = get_week_num($key1);
                    $option[$itskey] = $value1;
                 }
             }
             for($i=-1;$i<=9;$i++)
             {
              unset($option[$i]);
             }
           
         
        }
        else
        {        
             for($i=-1;$i<9;$i++)
             {
                 $str1 = '+'.$i.' week';  
                 
            $option[] = array(date('Y-m-d', strtotime('Monday',strtotime($str1))) => date('l Y-m-d', strtotime('Monday',strtotime($str1))));                     
                        
             }
             
             foreach ($option as $key => $value)
             {
                        
                 foreach ($value as $key1 => $value1)
                 {
                     $itskey = get_week_num($key1)."-".date('Y');
                    $option[$itskey] = $value1;
                 }
              }
             for($i=-1;$i<=9;$i++)
             {
              unset($option[$i]);
             }
        }   
                 
    $form['monday-week'] = array(
        '#type' => 'select', 
        '#title' => t('View Gymnasts'), 
        '#options' => $option,     
       
    );
    
    $form['submit-week'] = array(
        '#type' => 'submit',
        '#value' => t('View Gymnasts for the week')
    );
        
    return $form;
}

function printclasslists_getdateselectforweek_submit($form, &$form_state){

    $class = $form_state['clicked_button']['#post']['tag1'];
    $weekno = $form_state['values']['monday-week'];
    $gender = $form_state['clicked_button']['#post']['tag2'];
    
    $output = $class;   
    drupal_redirect_form($form, $redirect = "weekly_gymnasts/$class/$weekno/$gender");
}

function getStartAndEndDate($week, $year)
{
//    $week = 13;
//    $year = 2016;

	// print "week:" .$week."<br />";

	$dto = new DateTime();
    $dto->setISODate($year, $week);
    
    $return [0] = $dto->format('Y-m-d');
    
    for ($i=1; $i<=6; $i++){ 
    	$dto->modify('+1 days');
    	$return [$i] = $dto->format('Y-m-d');
    }


    /*$time = strtotime("1 January $year", time());    
    $day = date('w', $time); 
    
    print "day:".$day."<br />";
       
    $time += ((7*$week)+1-$day)*24*3600;    
       
        $return[$i] = date('Y-m-d', $time);    
        $time += 1*24*3600;    
    }*/
    
    /*print "<pre>";
    print_r ($return);
    print "</pre>";*/
    
    return $return;
}

// given an array of students, eg in GYM-Badge 1, returns all the students who are normally train on this day according to group
function printclasslists_return_students_per_day_per_group ($arr_students) {

$student_per_day_per_group = array ();
$day_arr = array ('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');

	foreach ($arr_students as $arr) {
	
		if ($arr ['gender'] == 'Male') {
			foreach ($day_arr as $day) {
				if ($arr [$day]) {
					$student_per_day_per_group ['Male'] [$day] [$arr['category'] ] = $arr; 
				}
			}
		}else {
			foreach ($day_arr as $day) {
				if ($arr [$day]) {
					$student_per_day_per_group ['Female'] [$day] [$arr['category'] ] = $arr; 
				}
			}
		}
	}
	return $student_per_day_per_group;
}

function printclasslists_print_students_per_day_per_category ($boys_list_array, $day, $category, $coach, $is_GYM_BADGE, $is_SKIL_BADGE = false, $key= "") {
	
	$cat_short = str_replace (" ", "", $category);
	
	if ($is_SKIL_BADGE) {
		$return = "<h3>$coach</h3>";
	}else {
		$return = "<h3>$category</h3>";
	}
	
	if ($is_GYM_BADGE) {
		$return .= "<i>$coach</i>";
	}
	
	/*if ($is_SKIL_BADGE) {
		$return .= "<ul id='sortable_".$day."_".$cat_short."' class='connectedSortable'>";
		$return .= $boys_list_array [$day] [$category] [$key];
		$return .= "</ul>";*/
	//}else {
		$return .= "<ul id='sortable_".$day."_".$cat_short."' class='connectedSortable'>";
		$return .= $boys_list_array [$day] [$category];
		$return .= "</ul>";
	//}
	
	return $return;
}

function printclasslists_print_students_per_day_for_coach ($boys_list_array, $day, $category, $coach) {
	
	//printclasslists_print_students_per_day_for_coach ($gymnast_list_array, $day, $bcat, $coach, $js_trial_data_list_array, $js_data_list_array);
	
	$cat_short = str_replace (" ", "", $category);
	//$return = "<h3>$category</h3>";
	//$return .= "<i>$coach</i>";
	$return .= "<div class='coachlist'>";
	$return .= $boys_list_array [$day] [$category];
	$return .= "</div>";
	
	return $return;
}

/* returns a string of gymnasts for the JS data array */
function printclasslists_get_students_per_class_js_format ($js_data_list_array, $gender, $is_GYM_BADGE, $is_SKIL_BADGE=false) {
	/* format returned is 
	[
      { label: "FAINSTEIN Joshua", category: "Monday" },
      { label: "HESSELBERG Gabriel", category: "Tuesday" },
      { label: "BOTHA Keegan", category: "Wednesday" },
      { label: "HESSELBERG Gabriel", category: "Thursday" },
      { label: "BOTHA Keegan", category: "Friday" },
      { label: "", category: "Saturday" }
    ];*/
    
    
    /*print "<pre>";
    print_r ($js_data_list_array);
    print "</pre>";*/
    
    $day_arr = array ('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'unknown');
    
    if ($is_GYM_BADGE) {
        $cat_arr = array ('Group 1', 'Group 2', 'Group 3', 'Group 4', 'Group 5', 'Group 6', 'Group 7', 'Group 8');
        /*
    	if ($gender == 'Boys') {
    		$cat_arr = array ('Boys A', 'Boys B', 'Boys C', 'Boys D', 'Boys E', 'Boys F');
    	}else {
    		$cat_arr = array ('Girls A', 'Girls B', 'Girls C', 'Girls D', 'Girls E', 'Girls F');
    	}*/
    }else {
    	$cat_arr = array ('All');
    }
    
    if ($is_SKIL_BADGE) {
    	// Skill badge $bcat is the coach ID
    	
		foreach ($day_arr as $day) {
				foreach ($js_data_list_array [$day] as $key=>$d) {
					$return .= $d;
				}
    	}	
    
    }else {
    	foreach ($day_arr as $day) {
				foreach ($cat_arr as $bcat) {
					$return .= $js_data_list_array [$day] [$bcat];
				}
    	}
    }
    
    $return = "[". $return. "]";
    
    $return = str_replace (",]", "]", $return);
	return $return;    
}

/* check gymnast_week_schedule table for any gymnasts who have moved to this day, or are a catchup, or have been added to this day and
return the array */

function printclasslists_return_gymnast_week_schedule ($class, $weekno, $year, $gender_short, &$remove_arr, $is_GYM_BADGE = false) {
	 /* $arr will contain the users who have moved to a different day */
	 /* $remove_arr will contain the user id's of the gymnasts who need to be removed from the days listing as they have moved */
	 
	 //$query = "SELECT * from gymnast_week_schedule WHERE `week` = $weekno AND `year` = $year AND `class` = '$class' AND (`catch_up` = 1 OR `moved` =1)";
	 if ($is_GYM_BADGE) {
	 	$query = "SELECT * from gymnast_week_schedule WHERE (`week` = $weekno AND `year` = $year AND `class` = '$class' AND (`catch_up` = 1 OR `moved` =1) ) OR ( `week` = $weekno AND `year` = $year AND `day_of_the_week` = 'scratch_area_list' AND `gender` = '$gender_short') ";
	 }else {
	 	$query = "SELECT * from gymnast_week_schedule WHERE (`week` = $weekno AND `year` = $year AND `class` = '$class' AND (`catch_up` = 1 OR `moved` =1) ) OR ( `week` = $weekno AND `year` = $year AND `day_of_the_week` = 'scratch_area_list') ";
	 }
	 
	 // need to handle scenario where day_of_the_week = 'scratch_area_list'.
	 
	 //print $query;
	 $result = db_query ($query);

	$arr = array();
	$remove_arr = array ();
	
	$counter=1;
	 while ( $row = db_fetch_object($result) ) {
	 
		if ($row ->catch_up) {
		
			$arr [$counter] ['userid'] = $row ->userid;
			$arr [$counter] ['day_of_the_week'] = $row->day_of_the_week;
			$arr [$counter] ['group'] = $row->group;
			$arr [$counter] ['trial'] = $row->trial;
			$arr [$counter] ['catch_up'] = 1;
			$arr [$counter] ['moved'] = 0;
			$arr [$counter] ['day_moved_from'] = $row ->day_moved_from;
			$arr [$counter] ['class'] = $class;
			$counter ++;
		}
		
		if ($row ->moved) {
			//$arr [$row->day_of_the_week] [$row->group] ['moved'] [$row->userid] ['day_moved_from'] = $row ->day_moved_from;
			$arr [$counter] ['userid'] = $row ->userid;
			$arr [$counter] ['day_of_the_week'] = $row->day_of_the_week;
			$arr [$counter] ['group'] = $row->group;
			$arr [$counter] ['trial'] = $row->trial;
			$arr [$counter] ['catch_up'] = 0;
			$arr [$counter] ['moved'] = 1;
			$arr [$counter] ['day_moved_from'] = $row ->day_moved_from;
			$arr [$counter] ['class'] = $class;
			
			//$arr [$row->day_of_the_week] [$row->group] ['moved'] [$row->userid] ['day_moved_from'] = $row ->day_moved_from;
			// keep track of the day the gymnast moved from, so that we can remove their name from the list
			
			$remove_arr [$row->day_moved_from] [$row->group] [$row->userid] = $row->userid;
			
			$counter ++;
		
		}
	 }
	
	// build the array
	 	
	 return $arr;
	
}

/* menu clicked for weekly_gymnasts, default to this week Gym Badge 1 */
function weekly_gymnasts () {

	$thisweek = date('Y-m-d') ;                              
    $weekno = get_week_num($thisweek)."-".date('Y');

	$class = 'GYM-Badge 1';
    drupal_redirect_form($form, $redirect = "weekly_gymnasts/$class/$weekno/Boys");
}

/* returns the li html element formated for the user */
function printclasslists_html_li_attendance ($arr, $user_id, $gymnast_checked_off,  $class="standard_li") {

	if ($gymnast_checked_off) {
		$is_highlighted = 1;
		$is_highlighted_css = 'is_highlighted';
	}else {
		$is_highlighted = 0;
		$is_highlighted_css = '';
	}

	$str = "<li class='$class $is_highlighted_css'>
            <span class='user_id' style='display:none'>".$user_id."</span>
            <span class='last_name'>".$arr['profile_values_profile_last_name_value']."</span>
            <span class='first_name'>".$arr['profile_values_profile_first_name_value']."</span>
            <span class='click_time'></span>
            <span class='is_highlighted' style='display:none'>$is_highlighted</span>
        </li>";
    return $str;
}


function get_report_date_in_correct_format ($year, $weekno, $day) {
	switch ($day) {
    	case "Monday": 
    		$day_number = 1;
    		break;
    	case "Tuesday": 
    		$day_number = 2;
    		break;
		case "Wednesday": 
    		$day_number = 3;
    		break;
		case "Thursday": 
    		$day_number = 4;
    		break;
		case "Friday": 
    		$day_number = 5;
    		break;
		case "Saturday": 
    		$day_number = 6;
    		break;
    }

	$gendate = new DateTime();
	$gendate->setISODate($year,$weekno, $day_number); //year , week num , day
	$reportdate = $gendate->format('Y-m-d');
	return $reportdate;
}

/* Ajax call */
// save the fun badge group for the gymnast eg Group 1, Group 2 etc
function groupclass_save () {
/* POST VAR 


	
	user_id: user_id_temp,
                group_value: selectedvalue, 
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'",
    			value_type_name: value_type,
*/

	$temp_user_id = $_POST['user_id'];
	$user_load = user_load($temp_user_id);
	$gymnast_name = $user_load->profile_last_name ." ".$user_load->profile_first_name;
	
	$alert = "";
	
	//$time_click = $_POST['time_click'];
	$class = $_POST['class_name'];
	$reportdate = $_POST['report_date'];
    $year = $_POST['report_year'];
    $progress_report_id = $_POST['progress_report_id'];
    $role_id = $_POST['role_id'];
    $class_id = $_POST['classid'];
    $day = $_POST['report_day'];
    $weekno = $_POST['week_no'];
    $group_value = $_POST ['group_value'];
    
    $reportdate_timestamp = strtotime ($reportdate);
    
    if ($comment) {
    	$has_comment = true;
    }else {
    	$has_comment = false;
    }
    
    // check to see if this gymnast has had attendance checked off
    $query = "SELECT * from attendance_register WHERE `user_id` = $temp_user_id AND `year` = $year AND `week` = $weekno AND `date` = $reportdate_timestamp AND `role` = '$class' AND `role_id` = $role_id AND `progress_report_id` = $progress_report_id AND `day` = '$day'";
	
    watchdog("printclasslists", 'groupclass_save (week no '.$weekno.') query: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$arid = $row->arid;
     	$attendance = $row->attendance;
     	$time_arrived = $row->time_arrived;
    }
    
    if ($attendance) {
    	$time_message = "Gymnast arrived at: $time_arrived <br /><br />";
    }else {
    	$time_message = "<span class='alert_message'>SEND GYMNAST to front desk to sign in</span><br /><br />";
    	$alert = "Sign In";
    }
    
    //$query = "UPDATE attendance_register SET `attendance` = $is_highlighted, `time_arrived` = '$time' WHERE `arid` = $arid";
    
	// check to see if a progress report record has been previously created
	$query = "SELECT `gaid` from gymnast_group WHERE `uid` = $temp_user_id AND `year` = $year AND `progressid` = $progress_report_id AND `classid` = $class_id AND `roleid` = $role_id";
	
    watchdog("printclasslists", 'groupclass_save: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$gaid = $row->gaid;
    }

	if ($count_nodes) {
		// update existing gymanst row
		$query = "UPDATE gymnast_group SET `groupnumber`='$group_value' WHERE `gaid` = $gaid";
		
	} else {
		// insert new row
		$query = "INSERT INTO gymnast_group (`uid`, `progressid`, `created`, `classid`, `groupnumber`, `year`, `role`, `roleid`) VALUES ($temp_user_id, $progress_report_id, '".time()."', '".$class_id."', '".$group_value."', '".$year."', '".$class."','".$role_id."')"; 

	}
	
	watchdog("printclasslists", 'count nodes: '. $count_nodes); 
	
	watchdog("printclasslists", 'update or insert query : '. $query);
	
	if (db_query ($query)) {
    		print_json (array ('msg' => $time_message."Group $group_value allocated to $gymnast_name.", 'alertstatus' => $alert) );
    }else {
    	print_json (array ('msg' => "<span class='alert_message'>Group NOT SAVED - SYSTEM ERROR, please contact website admin.</span>") );
    }

}

/* Ajax call */

function coachclass_save () {
/* POST VAR 


	
	var report_date = '.$reportdate.';
    var report_year = '.$year.';
    var progress_report_id = '.$progress_report_id.';
    var coach_id = '.$coachid.';
    var role_id = '.$role_id.';
    var classid = '.$classid.';
    var report_day = '.$day.';
    var week_no = '.$weekno.';
    var class_name = '.arg(1).';
    value_type_name;
*/

	$temp_user_id = $_POST['user_id'];
	$user_load = user_load($temp_user_id);
	$gymnast_name = $user_load->profile_last_name ." ".$user_load->profile_first_name;
	
	$alert = "";
	
	$effort = $_POST['value_effort'];
	if ($effort == '-' OR $effort == '--') {
		$effort = 0;
	}
	
	if ($effort != 0 && ($effort < 2 OR $effort > 4)) {
		$extra_msg = "<span class='alert_message'>Talk to Chad!</span><br /><br />";
		$alert = "Talk to Chad";
	}else {
		$extra_msg = '';
	}
	//$time_click = $_POST['time_click'];
	$class = $_POST['class_name'];
	$reportdate = $_POST['report_date'];
    $year = $_POST['report_year'];
    $progress_report_id = $_POST['progress_report_id'];
    $coach_id = $_POST['coach_id'];
    $role_id = $_POST['role_id'];
    $class_id = $_POST['classid'];
    $day = $_POST['report_day'];
    $weekno = $_POST['week_no'];
    
    if ($_POST['value_type_name'] == 'effort') {
    	$performance_field_name = 'performance';
    	$performance_type = 'EFFORT';
    }else {
    	$performance_field_name = 'performance_real';
    	$performance_type = 'PERFORMANCE';
    }
    
    $reportdate_timestamp = strtotime ($reportdate);
    
    if ($comment) {
    	$has_comment = true;
    }else {
    	$has_comment = false;
    }
    
    // check to see if this gymnast has had attendance checked off
    $query = "SELECT * from attendance_register WHERE `user_id` = $temp_user_id AND `year` = $year AND `week` = $weekno AND `date` = $reportdate_timestamp AND `role` = '$class' AND `role_id` = $role_id AND `progress_report_id` = $progress_report_id AND `day` = '$day'";
	
    watchdog("printclasslists", 'coachclass_save (week no '.$weekno.') query: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$arid = $row->arid;
     	$attendance = $row->attendance;
     	$time_arrived = $row->time_arrived;
    }
    
    if ($attendance) {
    	$time_message = "Gymnast arrived at: $time_arrived <br /><br />";
    }else {
    	$time_message = "<span class='alert_message'>SEND GYMNAST to front desk to sign in</span><br /><br />";
    	$alert = "Sign In";
    }
    
    //$query = "UPDATE attendance_register SET `attendance` = $is_highlighted, `time_arrived` = '$time' WHERE `arid` = $arid";
    
	// check to see if a progress report record has been previously created
    global $user;
	$query = "SELECT `ptid` from progresstracker WHERE `uid` = $temp_user_id AND `year` = $year AND `progressid` = $progress_report_id AND `classid` = $class_id AND `roleid` = $role_id AND `coachid` = $user->uid";
	$count_nodes = 0;
    $result = db_query($query);
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$ptid = $row->ptid;
    }
    if ($count_nodes) {
		// update existing gymanst row
		$query = "UPDATE progresstracker SET {$performance_field_name}='$effort' WHERE `ptid` = $ptid";
		
	}
	else {
		// insert new row
		$query = "INSERT INTO progresstracker (`uid`, `progressid`, `created`, `classid`, `attendance`, `{$performance_field_name}`, `year`, `role`, `roleid`,`coachid`) VALUES ($temp_user_id, $progress_report_id, '".time()."', '".$class_id."', '".$attendance."', '".$effort."', '".$year."', '".$class."','".$role_id."','".$user->uid."')";
    }
	if (db_query ($query)) {
    	if ($has_comment) {
    		print_json (array ('msg' => $time_message.$extra_msg."$performance_type saved for $gymnast_name.", 'alertstatus' => $alert) );
    	}else {
    		print_json (array ('msg' => $time_message.$extra_msg."$performance_type saved for $gymnast_name.", 'alertstatus' => $alert) );
    	}
    }else {
    	print_json (array ('msg' => "<span class='alert_message'>$performance_type NOT SAVED - SYSTEM ERROR, please contact website admin.</span>") );
    }

}

function coachclass_save_class_length () {
	/* Format of $POST variable

              user_id: user_id_temp,
                value_leftearly: selectedvalue,
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'"

*/
	$class = $_POST['class_name'];

	$temp_user_id = $_POST['user_id'];
	$user_load = user_load($temp_user_id);
	$gymnast_name = $user_load->profile_last_name ." ".$user->profile_first_name;
	
	$classlength = $_POST['value_classlength'];
	
	
	//$time_click = $_POST['time_click'];
	$reportdate = $_POST['report_date'];
    $year = $_POST['report_year'];
    $progress_report_id = $_POST['progress_report_id'];
    $coach_id = $_POST['coach_id'];
    $role_id = $_POST['role_id'];
    $class_id = $_POST['classid'];
    $day = $_POST['report_day'];
    $week_no = $_POST['week_no'];
    
    $class_name = $_POST['class_name'];
    
    $attendance = 0;
    
	// check to see if a 
	$query = "SELECT `ptid`, `performance`, `performance_real` from progresstracker WHERE `uid` = $temp_user_id AND `year` = $year AND `progressid` = $progress_report_id AND `classid` = $class_id AND `roleid` = $role_id";
	
    watchdog("printclasslists", 'coachclass_save_length: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$ptid = $row->ptid;
     	$effort = $row->performance;
     	$performance = $row->performance_real;
    }

	if ($effort) {
		$effort_message = "";
	}else {
		$effort_message = "<span class='alert_message'>Select EFFORT for <b>$gymnast_name</b></span><br /><br />";
	}
	
	if ($performance) {
		$effort_message = "";
	}else {
		$effort_message .= "<span class='alert_message'>Select PERFORMANCE for <b>$gymnast_name</b></span><br /><br />";
	}

	if ($count_nodes) {
		// update existing gymanst row
		$query = "UPDATE progresstracker SET classlength='$classlength' WHERE `ptid` = $ptid";
		
	} else {
		// insert new row
		$query = "INSERT INTO progresstracker (`uid`, `progressid`, `created`, `classid`, `attendance`, `classlength`, `year`, `role`, `roleid`) VALUES ($temp_user_id, $progress_report_id, '".time()."', '".$class_id."', '".$attendance."', '".$classlength."', '".$year."', '".$class."','".$role_id."')"; 
		/*
									uid='".$temp_user_id."',
									progressid='".$progress_report_id."',
									created='".time()."',
									classid='".$class_id."',
									classtime='".$class_time."',
									attendance='".$attendance."',
									performance='".$performance."',
									performance_real='".$effort."',
									coach_note='".$comment."',
									coachid ='".$coach_id."', 
									year='".$year."',
									role='".$class."',
									roleid='".$role_id."'"; */
	}
	
	watchdog("printclasslists", 'classlength query : '. $query);
	
	if (db_query ($query)) {
    		print_json (array ('msg' => $effort_message."CLASS LENGTH saved for $gymnast_name"));
    }else {
    	print_json (array ('msg' => "CLASS LENGTH NOT SAVED - SYSTEM ERROR.  Please contact website admin") );
    }
}

function coachclass_save_time () {
/* Format of $POST variable

              user_id: user_id_temp,
                value_leftearly: selectedvalue,
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'"

*/
	$class = $_POST['class_name'];

	$temp_user_id = $_POST['user_id'];
	$user_load = user_load($temp_user_id);
	$gymnast_name = $user_load->profile_last_name ." ".$user->profile_first_name;
	
	$leftearly = $_POST['value_leftearly'];
	
	if ($leftearly == '-') {
		$leftearly = 0;
	}
	
	//$time_click = $_POST['time_click'];
	$reportdate = $_POST['report_date'];
    $year = $_POST['report_year'];
    $progress_report_id = $_POST['progress_report_id'];
    $coach_id = $_POST['coach_id'];
    $role_id = $_POST['role_id'];
    $class_id = $_POST['classid'];
    $day = $_POST['report_day'];
    $week_no = $_POST['week_no'];
    
    $attendance = 0;
    
	// check to see if a 
	$query = "SELECT `ptid`, `performance`, `performance_real` from progresstracker WHERE `uid` = $temp_user_id AND `year` = $year AND `progressid` = $progress_report_id AND `classid` = $class_id AND `roleid` = $role_id";
	
    watchdog("printclasslists", 'coachclass_save_time: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$ptid = $row->ptid;
     	$effort = $row->performance;
     	$performance = $row->performance_real;
    }

	if ($effort || $performance_real) {
		$effort_message = "";
	}else {
		$effort_message = "<span class='alert_message'>Select EFFORT for <b>$gymnast_name</b></span><br /><br />";
	}

	if ($count_nodes) {
		// update existing gymanst row
		$query = "UPDATE progresstracker SET leftearly='$leftearly' WHERE `ptid` = $ptid";
		
	} else {
		// insert new row
		$query = "INSERT INTO progresstracker (`uid`, `progressid`, `created`, `classid`, `attendance`, `leftearly`, `year`, `role`, `roleid`) VALUES ($temp_user_id, $progress_report_id, '".time()."', '".$class_id."', '".$attendance."', '".$leftearly."', '".$year."', '".$class."','".$role_id."')"; 
		/*
									uid='".$temp_user_id."',
									progressid='".$progress_report_id."',
									created='".time()."',
									classid='".$class_id."',
									classtime='".$class_time."',
									attendance='".$attendance."',
									performance='".$performance."',
									performance_real='".$effort."',
									coach_note='".$comment."',
									coachid ='".$coach_id."', 
									year='".$year."',
									role='".$class."',
									roleid='".$role_id."'"; */
	}
	
	watchdog("printclasslists", 'time left early update or insert query : '. $query);
	
	if (db_query ($query)) {
    		print_json (array ('msg' => $effort_message."TIME LEFT EARLY saved for $gymnast_name"));
    }else {
    	print_json (array ('msg' => "TIME LEFT EARLY NOT SAVED - SYSTEM ERROR.  Please contact website admin") );
    }

}

/* saves a comment */
function printclasslists_progress_report_comment_save () {
	/* Format of $POST variable

              user_id: user_id_temp,
                gymnast_comment: selectedvalue,
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'"

*/

// 

	$gymnast_comment = mysql_real_escape_string ($_POST['gymnast_comment']);

	$class = $_POST['class_name'];

	$temp_user_id = $_POST['user_id'];
	$user_load = user_load($temp_user_id);
	$gymnast_name = $user_load->profile_last_name ." ". $user_load->profile_first_name;
	
	//$time_click = $_POST['time_click'];
	$reportdate = $_POST['report_date'];
    $year = $_POST['report_year'];
    $progress_report_id = $_POST['progress_report_id'];
    $coach_id = $_POST['coach_id'];
    $role_id = $_POST['role_id'];
    $class_id = $_POST['classid'];
    $day = $_POST['report_day'];
    $week_no = $_POST['week_no'];
    
    $class_name = $_POST['class_name'];
    
    $attendance = 0;
    
	// check to see if a 
	$query = "SELECT `ptid`, `performance`, `performance_real` from progresstracker WHERE `uid` = $temp_user_id AND `year` = $year AND `progressid` = $progress_report_id AND `classid` = $class_id AND `roleid` = $role_id AND `coachid` = $coach_id";
	
    watchdog("printclasslists", 'coachclass_save_time: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$ptid = $row->ptid;
     	$effort = $row->performance;
     	$performance = $row->performance_real;
    }

	if ($effort) {
		$effort_message = "";
	}else {
		$effort_message = "<span class='alert_message'>Select EFFORT for <b>$gymnast_name</b></span><br /><br />";
	}
	
	// Skil badge has performance as well as effort
	
	if ($class_name == 'SKIL-Badge') {
	
		if ($performance) {
			$effort_message = "";
		}else {
			$effort_message .= "<span class='alert_message'>Select PERFORMANCE for <b>$gymnast_name</b></span><br /><br />";
		}
	}

	if ($count_nodes) {
		// update existing gymanst row
		$query = "UPDATE progresstracker SET coach_note='$gymnast_comment' WHERE `ptid` = $ptid AND `coachid` = $coach_id";
		
	} else {
		// insert new row
		$query = "INSERT INTO progresstracker (`uid`, `progressid`, `created`, `classid`, `attendance`, `coach_note`, `year`, `role`, `roleid`) VALUES ($temp_user_id, $progress_report_id, '".time()."', '".$class_id."', '".$attendance."', '".$gymnast_comment."', '".$year."', '".$class."','".$role_id."')"; 
		/*
									uid='".$temp_user_id."',
									progressid='".$progress_report_id."',
									created='".time()."',
									classid='".$class_id."',
									classtime='".$class_time."',
									attendance='".$attendance."',
									performance='".$performance."',
									performance_real='".$effort."',
									coach_note='".$comment."',
									coachid ='".$coach_id."', 
									year='".$year."',
									role='".$class."',
									roleid='".$role_id."'"; */
	}
	
	watchdog("printclasslists", 'time left early update or insert query : '. $query);
	
	if (db_query ($query)) {
    		//print_json (array ('msg' => $effort_message."COMMENT saved for $gymnast_name"));
    }else {
    	//print_json (array ('msg' => "COMMENT NOT SAVED - SYSTEM ERROR.  Please contact website admin") );
    }
    $dayno = date('z');
    $querya = "INSERT INTO {_coach_comments} (`coachid`, `userid`, `progressid`, `comment`, `year`, `week`,`classid`, `day`,`dayno`) VALUES (".$coach_id.", ".$temp_user_id.", ".$progress_report_id.", '".$gymnast_comment."', ".$year.", ".$week_no.", ".$class_id.", '".$day."',".$dayno.")";

	if(db_query($querya)) {
        print_json (array ('msg' => $effort_message."COMMENT saved for $gymnast_name"));
    }
    else {
        print_json (array ('msg' => $effort_message." ERRROR NOT SAVED $gymnast_name"));
    }


}

function minutes_round_attendance ($hour, $minutes = 5, $format = "H:i")
{
    $seconds = strtotime($hour);
    watchdog("printclasslists", 'minutes_round_attendance: seconds '. $seconds);
    $rounded = round($seconds / ($minutes * 60)) * ($minutes * 60);
    watchdog("printclasslists", 'minutes_round_attendance: rounded '. $rounded);
    return date($format, $rounded);
}

function attendance_calculate_class_length_attendance ($class_start_time, $time, $class_length) {
	/* times are in the format 24:00 */
	
	$class_start_time = str_replace (":", "", $class_start_time);

	watchdog("printclasslists", 'calculate_class_length_attendance: class_start_time '. $class_start_time);
	
	$time = str_replace (":", "",$time);

	watchdog("printclasslists", 'calculate_class_length_attendance: time '. $time);
		
	if ($time <= $class_start_time) {
		// gymnast early or on time
		
		return $class_length;
	}else {
		// gymnast is late for class
		$late = $time - $class_start_time; // time gymnast arrived minus time class starts
		// 14:30 - 14:15 = 15 minutes
		// 60 -
		
		$attendance = $class_length - $late;
		 
		if ($attendance <= 5) {
			// person arrived after the class has finished - shouldn't happen, give the gymnast 5 minutes of time in the class.
			$attendance = 5;
		}
		
		return $attendance;
	}





	watchdog("printclasslists", 'calculate_class_length_attendance: difference '. $difference);
	
	/*if ($difference < 0) {
		// person late for class
		$leng = $class_length - $difference; 

		watchdog("printclasslists", 'calculate_class_length_attendance: leng '. $leng);
		
		if ($leng <= 5) {
			
			return 5;
		}else {
			return $leng;
		}
	}else {
		return $class_length; // Gymnast was early or attended whole lesson
	}*/
}

/* Ajax call save time attended by coach or admin from drop down */

function attendance_register_save_coach_admin ()
{               

	/* format 
		user_id: user_id_temp,
        value_timearrived: selectedvalue,
        report_date: "2017-06-20",
    	report_year: 2017,
    	progress_report_id: 9217,
    	coach_id: 785,
    	role_id: 25,
    	classid: 8556,
    	report_day: "tuesday",
    	week_no: 25,
    	class_name: "FUN-Badge 0"
	
	*/

	$temp_user_id = $_POST['user_id'];
	//$time_click = $_POST['time_click'];
	
	$time = $_POST['value_timearrived'];
	
	if ($time) {
		// Setting the attendance to true, as a time has been entered.
		$is_highlighted = 1; // Time Selected, gymnast present
	} else {
		$is_highlighted = 0; // Time not Selected, gymnast not present
		$time = '';
	}

	//$time = date("H:i"); // use the time from the server rather from the browser.
	
	// value_timearrived is in 5 minute increments from the drop down.
	
	// round to closest 5 minutes
	//$time = minutes_round_attendance ($time);
	$class = $_POST['class_name'];
	$class_id = $_POST['classid'];
	$class_start_time = $_POST['class_start_time'];
	$class_length = $_POST['class_length'];
    //$year = explode ('-', $_POST['report_date']);
    $year = $_POST['year'];
    $weekno = $_POST['week_no'];
    
    
    global $base_url;
    $attendanceprogress['class'] = $class;    
    $attendanceprogress['date'] = getStartAndEndDate($weekno, $year);
    $day = date('l');
    
    
    
    # get the date for this day based on week number, day of the week and year
    $reportdate = $_POST['report_date'];
    # convert to linux timestamp
    $reportdate = strtotime ($reportdate);
    
    # get the corresponding progress_report node id
    $progress_report_id = $_POST['progress_report_id'];
    
   	# get the role ID
   	$role_id = $_POST['role_id'];
    
    // work out length of time gymnast has been in the class
    
	if ($class_length != 'Variable') { // Skill badge has variable times
		$class_length_attendance = attendance_calculate_class_length_attendance ($class_start_time, $time, $class_length);
	}else {
		$class_length_attendance = '0'; // we will need to work out attendance length at a later stage based on length of class for this gymnast (from progresstracker), and time left early VS the default length of class.
	}
	
    
    
    //$reportdate = get_report_date_in_correct_format ($year, $weekno, $day_number);
    
    # get the corresponding progress_report node id for this class and date.
    //$progress_report = get_progress_report ($reportdate, $class);
    
	
	$query = "SELECT `arid` from attendance_register WHERE `user_id` = $temp_user_id AND `year` = $year AND `week` = $weekno AND `date` = $reportdate AND `role` = '$class' AND `role_id` = $role_id AND `progress_report_id` = $progress_report_id AND `day` = '$day'";
	
    watchdog("printclasslists", 'attendance_register_save_coach_admin query: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$arid = $row->arid;
    }
    
    if ($count_nodes) {
    	// row already exists so update it.
    	
    	$query = "UPDATE attendance_register SET `attendance` = $is_highlighted, `time_arrived` = '$time', `class_start_time` = '$class_start_time', `class_length` = '".$class_length."', `class_length_attendance` = $class_length_attendance  WHERE `arid` = $arid";
		watchdog("printclasslists", 'attendance_register_save_coach_admin query: '. $query);
    }else {
    	// insert row
    	$query = "INSERT INTO attendance_register (`user_id`, `year`, `week`, `date`, `role`, `role_id`, `progress_report_id`, `day`, `attendance`, `time_arrived`, `class_id`, `class_start_time`, `class_length`, `class_length_attendance`) VALUES ($temp_user_id, $year, $weekno, $reportdate, '$class', $role_id, $progress_report_id, '$day', $is_highlighted, '$time', $class_id, '$class_start_time', '$class_length', '$class_length_attendance')";
    }
    
    watchdog("printclasslists", "attendance_register_save_coach_admin: arid $arid, user_id - $temp_user_id, time - $time, is_highlighted = $is_highlighted class_id = $class_id, class_length = $class_length. $query");
    
    if (db_query ($query)) {
    	if ($is_highlighted && $is_highlighted != 0) {
    		print_json (array ('msg' => "Attendance Recorded at $time"));
    	}else {
    		print_json (array ('msg' => "Attendance REMOVED") );
    	}
    }else {
    	print_json ('null');
    }

}

/*

/* Ajax call */
function attendance_register_save () {
                
	$temp_user_id = $_POST['user_id'];
	//$time_click = $_POST['time_click'];
	$is_highlighted = $_POST['is_highlighted_text'];
	$time = date("H:i"); // use the time from the server rather from the browser.
	// round to closest 5 minutes
	$time = minutes_round_attendance ($time);
	$class = arg(1);
	$class_id = $_POST['class_id'];
	$class_start_time = $_POST['class_start_time'];
	$class_length = $_POST['class_length'];
    $week_year = explode ('-', arg(2) );
    $weekno = $week_year [0];
    $year = $week_year [1];
    global $base_url;
    $attendanceprogress['class'] = $class;    
    $attendanceprogress['date'] = getStartAndEndDate($weekno, $year);
    $day = arg (3);
    
    # get the date for this day based on week number, day of the week and year
    $reportdate = arg(5);
    # convert to linux timestamp
    $reportdate = strtotime ($reportdate);
    
    # get the corresponding progress_report node id
    $progress_report_id = arg(6);
    
   	# get the role ID
   	$role_id = arg(7);
    
    // work out if the gymnast is late for the lesson and if so by how many minutes
    
    $class_length_attendance = attendance_calculate_class_length_attendance ($class_start_time, $time, $class_length);
    
    //$reportdate = get_report_date_in_correct_format ($year, $weekno, $day_number);
    
    # get the corresponding progress_report node id for this class and date.
    //$progress_report = get_progress_report ($reportdate, $class);
    
	
	$query = "SELECT `arid` from attendance_register WHERE `user_id` = $temp_user_id AND `year` = $year AND `week` = $weekno AND `date` = $reportdate AND `role` = '$class' AND `role_id` = $role_id AND `progress_report_id` = $progress_report_id AND `day` = '$day'";
	
    watchdog("printclasslists", 'attendance_register_save query: '. $query);
    
    $count_nodes = 0;
    						 
    $result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	$count_nodes++;
     	$arid = $row->arid;
    }
    
    if ($count_nodes) {
    	// row already exists so update it.
    	
    	$query = "UPDATE attendance_register SET `attendance` = $is_highlighted, `time_arrived` = '$time', `class_start_time` = '$class_start_time', `class_length` = '$class_length', `class_length_attendance` = $class_length_attendance  WHERE `arid` = $arid";
    }else {
    	// insert row
    	$query = "INSERT INTO attendance_register (`user_id`, `year`, `week`, `date`, `role`, `role_id`, `progress_report_id`, `day`, `attendance`, `time_arrived`, `class_id`, `class_start_time`, `class_length`, `class_length_attendance`) VALUES ($temp_user_id, $year, $weekno, $reportdate, '$class', $role_id, $progress_report_id, '$day', $is_highlighted, '$time', $class_id, '$class_start_time', '$class_length', '$class_length_attendance')";
    }
    
    watchdog("printclasslists", "attendace register save: arid $arid, user_id - $temp_user_id, time - $time, is_highlighted = $is_highlighted class_id = $class_id, class_length = $class_length. $query");
    
    if (db_query ($query)) {
    	if ($is_highlighted && $is_highlighted != 0) {
    		print_json (array ('msg' => "Attendance Recorded at $time"));
    	}else {
    		print_json (array ('msg' => "Attendance REMOVED") );
    	}
    }else {
    	print_json ('null');
    }

}

function print_json ($var) {
	drupal_set_header('Content-Type: application/json');
	print(json_encode($var));
	module_invoke_all('exit');
}

function printclasslists_attendance_register_redirect () {

	$today = date('Y-m-d') ;  
	$weekno = get_week_num($today);
	$year = date('Y');                            
    $week_year = $weekno."-".$year;
	$day = date ('l');
	$class = 'GYM-Badge 1';
	
	$reportdate = get_report_date_in_correct_format ($year, $weekno, $day);
	
	//$progress_report = get_progress_report ($reportdate, $class);
	$progress_report = checkadmin ($class, $reportdate);

	// $_REQUEST [destination] is set to something like => "captureprogress/8457" which 		messes with drupal_goto
  // See: https://sites.google.com/site/prathameshsave007/drupal-forums/drupal_goto-not-working for more details
  // hence clear drupal_static_reset
  
  if (isset($_REQUEST['destination'])) {
  	unset($_REQUEST['destination']);
  }

	/*print '<pre>';
	print_r ($progress_report);
	print "</pre>";*/
	
	if ($progress_report) {
		$progress_report_id = $progress_report['pid'];
	}else {
		return "No progress report found for GYM-Badge 1 for $today";
	}
	
	$role_id = get_role_name ($class);
	
		
    
    drupal_redirect_form($form, $redirect = "attendance_register/$class/$week_year/$day/$reportdate/$progress_report_id/$role_id");
}

/* returns an array of all userid's the users who have been checked off for this class */
function printclasslists_get_gymnasts_checked_off_on_attendance_register ($year, $weekno, $reportdate, $class, $role_id, $progress_report_id, $day) {

	$reportdate = strtotime($reportdate);

	$query = "SELECT `arid`, `user_id`, `attendance` from attendance_register WHERE `year` = $year AND `week` = $weekno AND `date` = $reportdate AND `role` = '$class' AND `role_id` = $role_id AND `progress_report_id` = $progress_report_id AND `day` = '$day'";
	
	//print $query;
	
	$user_array = array ();
	
	$result = db_query($query);
    						 
    while($row = db_fetch_object ($result) ) {
     	if ($row->attendance == 1) {
     		// add to the array as the gymnast has previously been marked off for attendance
     		$user_array [$row->user_id] = $row->user_id;
     	}
    }
	
	/*print "<pre>";
	print_r ($user_array);
	print "</pre>";*/
	return $user_array;
}

function printclasslists_get_class_start_length ($class_id, $day) {
	 # Get the start time for this class
    $class_node = node_load (array("nid" => $class_id) );
	
	/*print "<pre>";
	print_r ($class_node);
	print "</pre>";*/
    
	$day = ucfirst($day);
	
    switch ($day) {
    	case 'Monday': 
    		$class_time_field = 'field_class_mon_time';
    		break;
    	
    	case 'Tuesday': 
    		$class_time_field = 'field_class_tue_time';
    		break;
    		
    	case 'Wednesday': 
    		$class_time_field = 'field_class_wed_time';
    		break;
    		
    	case 'Thursday': 
    		$class_time_field = 'field_class_thur_time';
    		break;
    		
    	case 'Friday': 
    		$class_time_field = 'field_class_fri_time';
    		break;

    	case 'Saturday': 
    		$class_time_field = 'field_class_sat_time';
    		break;
			
		default: /* for testing purposes */
			$class_time_field = 'field_class_sat_time';
    		break;
		
    }
    //print "Class Time field: ".$day.$class_time_field;

	if ($class_node) {
		$return->class_start_time = $class_node->{$class_time_field}[0]['value'];
		$return->class_length = $class_node->field_c_length[0]['value'];
	}else {
		return false;
		
	}
	//print_r ($return);
	return $return;
}

/* prints out the class list, tap on a gymnasts name when they arrive at the gym */
function printclasslists_attendance_register ($class) {
/* format: /attendance_register/GYM-Badge%201/39-2016/Wednesday/2016-09-28/6197 
/attendance_register/ class or role name / week-year / day / date of attendance register/ progress report id for the corresponding progress report on this date*/
	$class = arg(1);
    $week_year = explode ('-', arg(2) );
    $weekno = $week_year [0];
    $year = $week_year [1];
    global $base_url;
    $attendanceprogress['class'] = $class;    
    $attendanceprogress['date'] = getStartAndEndDate($weekno, $year);
    $day = arg (3);

    $reportdate = arg (4);    
    $progress_report_id = arg(5);
    $role_id = arg(6);
    
   	# Get progress report node ID & role ID for GYM-Badge 01, and create progress report if it doesn't exist
    
    // get_progress_report and checkadmin functions do the same checks, however checkadmin will create the progress report node if it doesn't exist for the date
    
    //$progress_report = get_progress_report ($reportdate, "GYM-Badge 1");
    $progress_report = checkadmin("GYM-Badge 1", $reportdate);
    
    if ($progress_report) {
		$gym_badge_1_progress_report_id = $progress_report['pid'];
    }else {
    	// need to create the progress report node for date
    }
    
    $gym_badge_1_role_id = get_role_name ("GYM-Badge 1");
    
    //$progress_report = get_progress_report ($reportdate, "FUN-Badge 0");
    $progress_report = checkadmin("FUN-Badge 0", $reportdate);
    
    if ($progress_report) {
		$fun_badge_0_progress_report_id = $progress_report['pid'];
    }else {
    	// need to create the progress report node for date
    }
    
    $fun_badge_0_role_id = get_role_name ("FUN-Badge 0");
    
    //$progress_report = get_progress_report ($reportdate, "FUN-Badge 1");
    $progress_report = checkadmin("FUN-Badge 1", $reportdate);
    
    if ($progress_report) {
		$fun_badge_1_progress_report_id = $progress_report['pid'];
    }else {
    	// need to create the progress report node for date
    }
    
    $fun_badge_1_role_id = get_role_name ("FUN-Badge 1");
    
    //$progress_report = get_progress_report ($reportdate, "FUN-Badge 2");
    $progress_report = checkadmin("FUN-Badge 2", $reportdate);
    
    if ($progress_report) {
		$fun_badge_2_progress_report_id = $progress_report['pid'];
    }else {
    	// need to create the progress report node for date
    }
    
    $fun_badge_2_role_id = get_role_name ("FUN-Badge 2");
    
    # Get progress report node ID for GYM-Badge 02
    //$progress_report = get_progress_report ($reportdate, "GYM-Badge 2");
    $progress_report = checkadmin("GYM-Badge 2", $reportdate);
    
    if ($progress_report) {
		$gym_badge_2_progress_report_id = $progress_report['pid'];
    }else {
    	// need to create the progress report node for date
    }
    
    //$progress_report = get_progress_report ($reportdate, "SKIL-Badge");
    $progress_report = checkadmin("SKIL-Badge", $reportdate);
    
    
    if ($progress_report) {
		$skil_badge_progress_report_id = $progress_report['pid'];
    }else {
    	// need to create the progress report node for date
    }
    
    $skil_badge_role_id = get_role_name ("SKIL-Badge");
    
    $gym_badge_2_role_id = get_role_name ("GYM-Badge 2");
        
    $progress_report_node = node_load (array("nid" => $progress_report_id) );
    
    # Get corresponding node id for the 'Class' node which this report node falls under
    $class_id = $progress_report_node ->field_pr_class [0]['nid'];
    
    # Get the start time for this class
    $class_node = node_load (array("nid" => $class_id) );
    
    switch ($day) {
    	case 'Monday': 
    		$class_time_field = 'field_class_mon_time';
    		break;
    	
    	case 'Tuesday': 
    		$class_time_field = 'field_class_tue_time';
    		break;
    		
    	case 'Wednesday': 
    		$class_time_field = 'field_class_wed_time';
    		break;
    		
    	case 'Thursday': 
    		$class_time_field = 'field_class_thur_time';
    		break;
    		
    	case 'Friday': 
    		$class_time_field = 'field_class_fri_time';
    		break;

    	case 'Saturday': 
    		$class_time_field = 'field_class_sat_time';
    		break;
    }
    //print $class_time_field;

    $class_start_time = $class_node->{$class_time_field}[0]['value'];
    
    
    $class_length = $progress_report_node->field_pr_c_length[0]['value'];
   
    
    /*print "<pre>";
    print_r ($progress_report_node);
    print "</pre>";
    
    print "<pre>";
    print_r ($class_node);
    print "</pre>";*/
    

    
    /*$gender = arg (3);
    
    if ($gender == 'Boys') {
    	$boys_or_girls = 'Boys';
    	$gender_formal = 'Male';
    	$gender_short = 'M';
    	$cat_arr = array ('Boys A', 'Boys B', 'Boys C', 'Boys D');
    }else {
    	$boys_or_girls = 'Girls';
    	$gender_formal = 'Female';
    	$gender_short = 'F';
    	$cat_arr = array ('Girls A', 'Girls B', 'Girls C', 'Girls D');
    }*/
    
    /* $fulldayFormat = date("dS F Y",strtotime($report_date));*/
    drupal_set_title("Attendance $day : " . $class . " (Date: ".$reportdate.")");
	$badtxt = $class; 
	if ($class=='GYM-Badge 1') {
			//$badtxt = 'GYM-Badge 1 & TID-Badge 1';
			$badtxt = 'GYM-Badge 1';
    }
	
	if ($class=='GYM-Badge 2') {
		//$badtxt = 'GYM-Badge 2 & TID-Badge 2';
		$badtxt = 'GYM-Badge 2';
	}
    
    if ($class=='TID') {
		$badtxt = 'TID';
	}
	
	if ($class=='SKIL-Badge') {
		$badtxt = 'SKIL-Badge & ELITE';
    }
    
    $key = printclasslists_extract_role_id($class);
    
    $roleid2 = FALSE;
	if ($class=='GYM-Badge 1') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 1');
    }
	if ($class=='GYM-Badge 2') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 2');
    }
	if ($class=='SKIL-Badge') {
		$roleid2 = printclasslists_extract_role_id('Elite');
    }
    
    # fetch all the gymnasts who are in this class
    
    $arr_students = printclasslists_return_users(null, $key, $roleid2, 'all', &$break, $class, $date);
    
    #check if gymnast for the class & day is on gymnast_week_schedule 
        
    
    $week_schedule_array = printclasslists_return_gymnast_week_schedule ($class, $weekno, $year, $gender_short, $remove_arr);
    $haystack = printclasslists_build_remove_haystack ($remove_arr, $day); 
    
    /*print '<pre>';
    print_r ($week_schedule_array);
    print "</pre>";*/
    
    // get a list of user ids of all gymnasts who have already been marked off for this day/class as being in attendance
    
    $in_attendance = printclasslists_get_gymnasts_checked_off_on_attendance_register ($year, $weekno, $reportdate, $class, $key, $progress_report_id, $day);
    
    
   /*print "in attendance<pre>";
 print_r ($in_attendance);
    print "</pre>";*/
    
   // print "remove_arr<pre>";
   // print_r ($remove_arr);
   // print "</pre>";
    
    $return .= "
    <div id=\"dialog\" style=\"display:none;\">
    
	</div>";
	
	
	
	$return .= "
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.js\"></script>
    <script>
    $(document).ready(function () {

		$('#dialog').dialog({
    		autoOpen: false,
    		show: \"blind\",
    		position: {
				my: 'left+5 top+5',
				at: 'left+5 top+5',
				of: window,
				collision: 'none'
			},
    		hide: \"explode\",
    		modal: true,
    		open: function(event, ui) {
        		setTimeout(function(){
            	$('#dialog').dialog('close');                
        	}, 500);
    	}
		});

        $('ul.attendance_ul li').click(function () {
            
            var is_highlighted = $(this).find('.is_highlighted');
            var current_li = $(this);
            var highlight = 0;
            
            if (is_highlighted.text() == 1 ) {
            	highlight = 0;
            }else highlight = 1;
            
            var postdata = {
                user_id: $(this).find('.user_id').text(),
                is_highlighted_text: highlight,
                click_time: $(this).find('.click_time').text(),
                class_id: ".$class_id.",
                class_start_time: '".$class_start_time."',
                class_length: '".$class_length."',
            };
            
            //alert (is_highlighted.text() );
            
            var url_direct = '/attendance_register/".arg(1).'/'.arg(2).'/'.arg(3)."/save/".$reportdate."/".$progress_report_id."/".$role_id."';
            
            // alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: 'POST',
                dataType: 'json',
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	if (is_highlighted.text() == '0') {
            			is_highlighted.text('1');
            			current_li.css ('background-color', '#666666');
            		}else {
            			is_highlighted.text('0');
            			current_li.css ('background-color', 'white');
            		}
                	$('#dialog').html(response.msg);
                	$('#dialog').dialog('open');
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert('An error occured: ' + xhr.status + ' ' + xhr.statusText);
      			}
            });
        });
        
        // girls
        $('ul.girls_attendance_ul li').click(function () {
            
            var is_highlighted = $(this).find('.is_highlighted');
            var current_li = $(this);
            var highlight = 0;
            
            if (is_highlighted.text() == 1 ) {
            	highlight = 0;
            }else highlight = 1;
            
            var postdata = {
                user_id: $(this).find('.user_id').text(),
                is_highlighted_text: highlight,
                click_time: $(this).find('.click_time').text(),
            };
            
            //alert (is_highlighted.text() );
            
            var url_direct = '/attendance_register/".arg(1).'/'.arg(2).'/'.arg(3)."/save/".$reportdate."/".$progress_report_id."/".$role_id."';
            
            // alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: 'POST',
                dataType: 'json',
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	if (is_highlighted.text() == '0') {
            			is_highlighted.text('1');
            			current_li.css ('background-color', '#666666');
            		}else {
            			is_highlighted.text('0');
            			current_li.css ('background-color', 'white');
            		}
                	$('#dialog').html(response.msg);
                	$('#dialog').dialog('open');
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert('An error occured: ' + xhr.status + ' ' + xhr.statusText);
      			}
            });
        });
        // end girls
    });
</script>";


    
    $return .= '<select onchange="location = this.options[this.selectedIndex].value;" class="class_select">
    <option>Change class:</option>
    
    
    
    <option value="/attendance_register/FUN-Badge%200/'.arg(2)."/".arg(3)."/".arg(4)."/".$fun_badge_0_progress_report_id."/".$fun_badge_0_role_id.'">FUN-Badge 00</option>
    
    <option value="/attendance_register/FUN-Badge%201/'.arg(2)."/".arg(3)."/".arg(4)."/".$fun_badge_1_progress_report_id."/".$fun_badge_1_role_id.'">FUN-Badge 01</option>
    
    <option value="/attendance_register/FUN-Badge%202/'.arg(2)."/".arg(3)."/".arg(4)."/".$fun_badge_2_progress_report_id."/".$fun_badge_2_role_id.'">FUN-Badge 02</option>
    
    <option value="/attendance_register/GYM-Badge%201/'.arg(2)."/".arg(3)."/".arg(4)."/".$gym_badge_1_progress_report_id."/".$gym_badge_1_role_id.'">GYM-Badge 01</option>
    <option value="/attendance_register/GYM-Badge%202/'.arg(2)."/".arg(3)."/".arg(4)."/".$gym_badge_2_progress_report_id."/".$gym_badge_2_role_id.'">GYM-Badge 02</option>

	<option value="/attendance_register/SKIL-Badge/'.arg(2)."/".arg(3)."/".arg(4)."/".$skil_badge_progress_report_id."/".$skil_badge_role_id.'">SKIL-Badge</option>
</select>';

    $return .= "<p>Please tap (or click) on Gymnast's name as they arrive at the gym</p>";
    $key = "<div class=key_details><p><b>Key (border color):</b><br />* <span class='gymnast_removed'>ORANGE - Gymnast temporarily removed from this day</span><br />";
    $key .= "* <span class='gymnast_moved'>GREEN - Gymnast temporarily moved to this day</span><br />";
    $key .= "* <span class='gymnast_trial'>YELLOW - Trial Gymnast</span><br />";
    $key .= "* <span class='gymnast_catchup'>GRAY - Catchup Gymnast</span><br />";
    $key .= "* <span class='gymnast_not_train_on_this_day'>RED - Gymnast normally does not train on this day</span></p></div>";        
	/*print "<pre>";
	print_r ($arr_students);
	print "</pre>";*/


	$trialist_ids_arr = array ();
	$day_lower_case = strtolower ($day);
	
	// get all the gymnasts who have been moved to this day or who are trialists
	// Add any gymnasts to the end of the $gymnast_list_array who have moved 
	
	/*print "week schedule array <pre>";
	print_r ($week_schedule_array);
	print "</pre>";*/
	
	$catchup_trial_moved = array ();
	
	if (is_array ($week_schedule_array) ) {
		foreach ($week_schedule_array as $u ) {
		
		/*	print "<pre>";
			print_r ($u);
			print "</pre>";
						
			
			print "class: $class<br />";
			
			if ($u['day_of_the_week'] == $day_lower_case) {
				print "day_lower_case: ".$day_lower_case." | ".$u['day_of_the_week']."<br />";}*/
	
	
	//		print "class: ".$class." | ".$u['class']."<br />";*/
			
			
		
			// check to see that the week_schedule_array 
			if ($u['group'] != 'scratch_area_list' && $u['day_of_the_week'] == $day_lower_case && $u['class'] == $class) {
			
			//print $u['uid']."<br />";

			
			
			// Check to see if this user has already been 'checked' off as present
			if (array_search ($u ['userid'] , $in_attendance , true) === FALSE ) {
				$gymnast_checked_off = false;
			}else {
				$gymnast_checked_off = true;
			}
			
			$user_load = user_load($u['userid']);
			
			/*print '<pre>';
			print_r ($user_load);
			print '</pre>';*/
			
			if ($u['trial']) {
				$style = 'attendance-trial';
			}else {
				$style = 'attendance-notrial';
			}
			
			if ($u['moved']) {	
				$style .=' attendance-moved';	
			}elseif ($u['catch_up']) {
				$style .= $style.' attendance-catchup';
	
			}
			$arr['profile_values_profile_last_name_value'] = strtoupper($user_load->profile_last_name);
			
			$arr['profile_values_profile_first_name_value'] = $user_load->profile_first_name;
			
			if ($u ['day_moved_from'] == $day_lower_case ) {
				// we don't add the gymnast to array $print_catchup_trial_moved if they moved from today, as they will already appear on the list in their normal position but styled differenlty 
			}else {
			
				$print_catchup_trial_moved [ $user_load ->profile_gymnast_gender] .= printclasslists_html_li_attendance ($arr, $u['userid'], $gymnast_checked_off, "standard_li $style");
			
				// keep a record of this user so that we don't display the same user twice.
				$catchup_trial_moved [$u['userid']] = $u['userid'];
			}
		}
		} // end foreach loop
	}
	
	/*print '<pre>';
	print_r ($print_catchup_trial_moved);
	print '</pre>';
	
	print '<pre>catchup_trial_moved';
	print_r ($catchup_trial_moved);
	print '</pre>';*/
	
	// end get all the gymnasts who have been moved to this day or who are trialists

	foreach ($arr_students as $temp_user_id=>$arr) {
	
	/*print "<pre>";
	print_r ($arr);
	print "</pre>";*/
	
		// Check to see if this user has already been 'checked' off as present
		if (array_search ($arr ['uid'] , $in_attendance , true) === FALSE ) {
			$gymnast_checked_off = false;
		}else {
			$gymnast_checked_off = true;
		}
	
		if ($arr[$day_lower_case]) {
			// normally train on this day
	
			// check to see if user is already in the $catchup_trial_moved array
			
			if ($arr ['user_multi_role'] == 'Trial') {
				$style = 'attendance-trial';
			}else {
				$style = 'attendance-notrial';
			}
			
			/*print "<pre>";
			print_r ($arr);
			print "</pre>";*/
			
			
			if (array_search ($arr ['uid'] , $catchup_trial_moved , true) === FALSE ) { 
	
				$add = printclasslists_check_if_in_remove_arr ($remove_arr, $day, $arr, false, $haystack);
				
				if ($add) {
					$print_arr_today [ $arr['gender'] ] .= printclasslists_html_li_attendance ($arr, $temp_user_id, $gymnast_checked_off, $style);
				}else {
					$print_arr_today [ $arr['gender'] ] .= printclasslists_html_li_attendance ($arr, $temp_user_id, $gymnast_checked_off, "standard_li gymnast-removed-li $style");
				}
			}	
			
		}else {
			// normally don't train on this day
			// check to see if user is already in the $catchup_trial_moved array
			
			/*if (array_search ($arr ['userid'] , $catchup_trial_moved , true) === FALSE ) { 
				$print_arr_other [ $arr['gender'] ] .= printclasslists_html_li_attendance ($arr, $temp_user_id, $gymnast_checked_off, "usually_do_not_train $style");
			}*/
		}
	}
		
	$return .= "<div class=float_left_boys>";
	$return .= "<h3>Boys</h3>";
	$return .= "<ul id='boys_attendance' class='attendance_ul'>";
	$return .= $print_arr_today ['Male'];
	$return .= $print_catchup_trial_moved ['Male'];
	$return .= $print_arr_other ['Male'];
	$return .= "</ul>";
	$return .= "</div>";

	$return .= "<div class=float_right_girls>";
	$return .= "<h3>Girls</h3>";
	$return .= "<ul id='girls_attendance' class='attendance_ul'>";
	$return .= $print_arr_today ['Female'];
	$return .= $print_catchup_trial_moved ['Female'];
	$return .= $print_arr_other ['Female'];
	$return .= "</ul>";	
	$return .= "</div>";
	$return .= $key;
	/*print '<pre>';
	print_r ($week_schedule_array);
	print '</pre>';*/

    
    /********************/
    
    return $return;
}


/* returns an array of all the gymnasts who would normally train on this day, but have been moved or removed from this day */
function printclasslists_build_remove_haystack ($remove_arr, $day) {
	$day = strtolower ($day);
	// build the array with the for the day
	$cat_arr = array ('Group 1', 'Group 2', 'Group 3', 'Group 4', 'Group 5', 'Group 6', 'Group 7', 'Group 8');;
		
	foreach ($cat_arr as $cat) {
		if (is_array ($remove_arr [$day][$cat]) ) {
			foreach ($remove_arr [$day][$cat] as $a) {
				$haystack [$a] = $a;
			}
		}		
	}
		
	return $haystack;
}

/* check to see if the user is in teh remove_arr and see if they should be added or not to the current list of gymnasts */
function printclasslists_check_if_in_remove_arr ($remove_arr, $day, $arr, $bcat=false, $haystack = false) {
	$add = true;
	$day = strtolower ($day);
	
	if ($bcat) {
	// here we are checking according to category/group as well eg 'Boys A';
		if (is_array ($remove_arr [$day][$bcat]) ) {
			if (array_search ($arr ['uid'] , $remove_arr [$day][$bcat], true) === FALSE ) {
				// add the user to this day and category/group
				$add = true;
			}else {
				// don't add the user to this day and category/group
				$add = false;
			}
		}else {
			$add = true;
		}
		
		// check if gymnast is in the remove_arr in the scratch_area_list day (user was then dragged to the scratch_area_list from this day and shouldn't be displayed)
						
		if (is_array ($remove_arr [$day]['scratch_area_list']) ) {
			if (array_search ($arr ['uid'] , $remove_arr [$day]['scratch_area_list'], true) === FALSE ) {
				// add the user to this day and category/group
				$add = true;
			}else {
				// don't add the user to this day and category/group
				$add = false;
			}
		}
	}else {
		// not checking according to category /group
		
		if (is_array ($remove_arr [$day]) ) {
			
			if (array_search ($arr ['uid'] , $haystack, true) === FALSE ) {
				// add the user to this day and category/group
				$add = true;
			}else {
				// don't add the user to this day and category/group
				$add = false;
			}
		}else {
			$add = true;
		}
		
		// check if gymnast is in the remove_arr in the scratch_area_list day (user was then dragged to the scratch_area_list from this day and shouldn't be displayed)
						
		if (is_array ($remove_arr [$day]['scratch_area_list']) ) {
			if (array_search ($arr ['uid'] , $remove_arr [$day]['scratch_area_list'], true) === FALSE ) {
				// add the user to this day and category/group
				$add = true;
			}else {
				// don't add the user to this day and category/group
				$add = false;
			}
		}
	}
	
	return $add;
}

function printclasslists_get_jquery_scripts () {
	$output = '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>';
  
  	return $output;
}

function printclasslists_get_javascript_coach_capture_list ($reportdate, $year, $progress_report_id, $classid, $class, $coachid, $role_id, $day, $weekno, $is_GYM_BADGE = false, $class_start_time = '', $class_length = '') {
	$output .= '<div id="dialog" style="display:none;"></div>';
  
  	$output .= '<script type="text/javascript">
  
  $(document).ready(function(){ /* PREPARE THE SCRIPT */
  
  $(\'#dialog\').dialog({
    		autoOpen: false,
    		show: "blind",
    		position: {
				my: "left+5 top+5",
				at: "left+5 top+5",
				of: window,
				collision: "none"
			},
    		hide: "explode",
    		modal: true,
    		open: function(event, ui) {
        		setTimeout(function(){
            	$(\'#dialog\').dialog(\'close\');                
        	}, 2000);
    	}
		});
		
	$(".gymnast_save_button").click(function() {
		var user_id_temp = $(this).attr("name");
    	user_id_temp = user_id_temp.replace("button_", "");
    	//alert (user_id_temp);
    	
    	selectedvalue = $("#gymnast_comment_" + user_id_temp).val();
    	    	
    	//alert (selectedvalue);
    	
    	var postdata = {
                user_id: user_id_temp,
                gymnast_comment: selectedvalue, 
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'"
            };
                
            var url_direct = "/progress_report_comment_save";
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	$("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	
	});	
	 $(".progresstracker_get_javascript_fun_allocation").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
    
    var user_id_temp = $(this).attr("name");
    user_id_temp = user_id_temp.replace("groupid[", "");
    user_id_temp = user_id_temp.replace("]", "");
    var value_type = "group";
    
    var selectedvalue = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
    //alert (user_id_temp);
    
    //alert (selectedvalue);
    
    var postdata = {
                user_id: user_id_temp,
                group_value: selectedvalue, 
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'",
    			value_type_name: value_type,
            };
                
            var url_direct = "/groupclass_save";
            
             // alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
            $("#dialog").html(response.msg);
                    $("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
    
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	

        });    
  
    $(".dropdown-counter").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
        var that = this;
	var selectedeffort = $(that).val();
	var coachcomment = "";
	if(selectedeffort <= 2) {

	}
	else if(selectedeffort == 2.5) {
		coachcomment = "Slightly below expectation.";
	}
	else if(selectedeffort == 3) {
		coachcomment = "Expectation achieved.";
	}
	else if(selectedeffort == 3.5) {
		coachcomment = "Slightly above expectation.";
	}
	else if(selectedeffort >= 4) {
	}
	$(that).parent().parent().find(".gymnast_comment_text").val(coachcomment);
    var user_id_temp = $(this).attr("name");
    user_id_temp = user_id_temp.replace("effort[", "");
    user_id_temp = user_id_temp.replace("]", "");
    var value_type = $(this).data("v-type");
    
    //alert (value_type);
    //exit;
    var selectedvalue = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
    //alert (user_id_temp);
    var postdata = {
                user_id: user_id_temp,
                value_effort: selectedvalue, 
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'",
    			value_type_name: value_type,
            };
                
            var url_direct = "/coachclass_save";
            
             // alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	$("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	

        });
        
        
        $(".dropdown-timeleftearly").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
    
    var user_id_temp = $(this).attr("name");
    user_id_temp = user_id_temp.replace("timeleftearly[", "");
    user_id_temp = user_id_temp.replace("]", "");
    
 
    var selectedvalue = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */

	//alert (selectedvalue);

    var postdata = {
                user_id: user_id_temp,
                value_leftearly: selectedvalue,
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'"
            };
            
            //var url_direct = "/coachclass_save_time/'.arg(1).'/'.$reportdate.'/'.$year.'/'.$progress_report_id.'/'.$coachid.'/'.$role_id.'/'.$classid.'/'.$day.'/'.$weekno.'/save";
            
            var url_direct = "/coachclass_save_time";
            
             //alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	$("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	

        });
        
        $(".dropdown-timearrived").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
    
    var user_id_temp = $(this).attr("name");
    user_id_temp = user_id_temp.replace("timearrived[", "");
    user_id_temp = user_id_temp.replace("]", "");
    
 
    var selectedvalue = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */


    var postdata = {
                user_id: user_id_temp,
                value_timearrived: selectedvalue,
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'",
				class_start_time: "'.$class_start_time.'",
                class_length: "'.$class_length.'",
				year: "'.$year.'"
            };
            
            //var url_direct = "/coachclass_save_time/'.arg(1).'/'.$reportdate.'/'.$year.'/'.$progress_report_id.'/'.$coachid.'/'.$role_id.'/'.$classid.'/'.$day.'/'.$weekno.'/save";
            
            var url_direct = "/attendance_register_class_save_time_coach_admin";
            
             //alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	$("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	

        });
        
        $(".dropdown-classlength").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
    
    var user_id_temp = $(this).attr("name");
    user_id_temp = user_id_temp.replace("classlength[", "");
    user_id_temp = user_id_temp.replace("]", "");
    
 
    var selectedvalue = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */

	//alert (selectedvalue);

    var postdata = {
                user_id: user_id_temp,
                value_classlength: selectedvalue,
                report_date: "'.$reportdate.'",
    			report_year: '.$year.',
    			progress_report_id: '.$progress_report_id.',
    			coach_id: '.$coachid.',
    			role_id: '.$role_id.',
    			classid: '.$classid.',
    			report_day: "'.$day.'",
    			week_no: '.$weekno.',
    			class_name: "'.$class.'"
            };
            
            var url_direct = "/coachclass_save_class_length";
            
             //alert (url_direct);
            
            $.ajax({
                url: url_direct,
                type: "POST",
                dataType: "json",
                data: postdata,

                success: function(response) {
                	//var json = $.parseJSON(response)
                	$("#dialog").html(response.msg);
                	$("#dialog").dialog("open");
        			//alert(response.msg);
        			return response.msg;        
      			},
      			error: function(xhr) {
        			 alert("An error occured: " + xhr.status + " "+ xhr.statusText);
      			}
            });	

        });
        
        
        
    });
  
  //GET THE BASIC AND ADVACNED CHECKED CRITERIA FOR THE STUDENT IN THE GYM BADGE CATERGORY
  
  $(document).ready(function(g){
      
      $(document).on("click", ".basic_check", function(f) {
          if($(this).prop("checked")) {
              var type = "basic";
              var userid = $(this).parent().parent().attr("data-userid");
              var gcid = $(this).parent().parent().attr("data-gcid");
              var badge = $(this).parent().parent().attr("data-badge");
              var coachid = $(this).parent().parent().attr("data-coachid");
              console.log("CHECKED - USERID: " +userid +" GCID: " + gcid + " BADGE: " + badge + " COACHID: " + coachid);
              $.post("../save_gymbadge_criteria", {"type":type,"userid":userid,"gcid":gcid,"badge":badge,"coachid":coachid}, function(data) {
                   // alert(data);
                });
          }
          else {
              var type = "basic";
              var userid = $(this).parent().parent().attr("data-userid");
              var gcid = $(this).parent().parent().attr("data-gcid");
              var badge = $(this).parent().parent().attr("data-badge");
              var coachid = $(this).parent().parent().attr("data-coachid");
              console.log("NOT CHECKED - USERID: " +userid +" GCID: " + gcid + " BADGE: " + badge + " COACHID: " + coachid);
              $.post("../save_gymbadge_criteria", {"type":type,"userid":userid,"gcid":gcid,"badge":badge,"coachid":coachid}, function(data) {
                    //alert(data);
              });
              
          }
      });
       $(document).on("click", ".advanced_check", function(f) {
          if($(this).prop("checked")) {
              var type = "advanced";
              var userid = $(this).parent().parent().attr("data-userid");
              var gcid = $(this).parent().parent().attr("data-gcid");
              var badge = $(this).parent().parent().attr("data-badge");
              var coachid = $(this).parent().parent().attr("data-coachid");
              console.log("CHECKED - USERID: " +userid +" GCID: " + gcid + " BADGE: " + badge + " COACHID: " + coachid);
              $.post("../save_gymbadge_criteria", {"type":type,"userid":userid,"gcid":gcid,"badge":badge,"coachid":coachid}, function(data) {
                   // alert(data);
                });
          }
          else {
              var type = "advanced";
              var userid = $(this).parent().parent().attr("data-userid");
              var gcid = $(this).parent().parent().attr("data-gcid");
              var badge = $(this).parent().parent().attr("data-badge");
              var coachid = $(this).parent().parent().attr("data-coachid");
              console.log("NOT CHECKED - USERID: " +userid +" GCID: " + gcid + " BADGE: " + badge + " COACHID: " + coachid);
              $.post("../save_gymbadge_criteria", {"type":type,"userid":userid,"gcid":gcid,"badge":badge,"coachid":coachid}, function(data) {
                    //alert(data);
              });
              
          }
      });
  });
</script>';

	return $output;
}
function save_gymbadge_criteria() {
    var_dump($_POST);
    /*SEE IF IT EXSISTS*/
    $sql = db_query("SELECT * FROM gym_diary WHERE gcid = '%s' AND uid = '%s' AND badge = '%s'", $_POST['gcid'], $_POST['userid'], $_POST['badge']);

    $has = false;
    while($row = db_fetch_object($sql)) {
        $has = true;
    }
    if($has) {
        if($_POST['type'] == 'basic') {
            $sql = db_query("UPDATE gym_diary SET coach_id_basic = '%s', coach_competent_basic = '%s',coach_competentdate_basic = '%s' WHERE gcid = '%s' AND uid = '%s' AND badge = '%s'",$_POST['coachid'], 1,time(),$_POST['gcid'],$_POST['userid'],$_POST['badge']);
        }
        if($_POST['type'] == 'advanced') {
            $sql = db_query("UPDATE gym_diary SET coach_id_advanced = '%s' , coach_competent_advanced = '%s',coach_competentdate_advanced = '%s' WHERE gcid = '%s' AND uid = '%s' AND badge = '%s'",$_POST['coachid'], 1,time(),$_POST['gcid'],$_POST['userid'],$_POST['badge']);
        }
    }
    else {
        if($_POST['type'] == 'basic') {
            $sql = db_query("INSERT INTO gym_diary (gcid,uid,badge,coach_id_basic,coach_competent_basic,coach_competentdate_basic) VALUES('%s','%s','%s','%s','%s','%s')", $_POST['gcid'], $_POST['userid'], $_POST['badge'], $_POST['coachid'], 1, time());
        }
        else if($_POST['type'] = 'advacned') {
            $sql = db_query("INSERT INTO gym_diary (gcid,uid,badge,coach_id_advanced,coach_competent_advanced,coach_competentdate_advanced) VALUES('%s','%s','%s','%s','%s','%s')", $_POST['gcid'], $_POST['userid'], $_POST['badge'], $_POST['coachid'], 1, time());
        }
        //echo "DOES NOT HAVE";
    }

}
function printclasslists_get_effort_select ($uarray, $arr, $userid, $progress_report_id) {
    $gea = new GetEffortAverage($userid, $progress_report_id);
    $gea->getListOfAverageEffort();
$effort_select = '<div class=effort><select class="dropdown-counter" name="effort['.$arr['uid'].']" data-v-type="effort" >
									<option value="'.$gea->getListOfAverageEffort().'" '.($uarray[$arr['uid']]['performance']==1?'selected="selected"':'').' data-v-type="effort">'.$gea->getListOfAverageEffort().'</option>
									<option value="0" data-v-type="effort">-</option>
									<option value="1" '.($uarray[$arr['uid']]['performance']==1?'selected="selected"':'').' data-v-type="effort">1</option>
									<option value="1.5" '.($uarray[$arr['uid']]['performance']==1.5?'selected="selected"':'').' data-v-type="effort">1.5</option>
									<option value="2" '.($uarray[$arr['uid']]['performance']==2?'selected="selected"':'').' data-v-type="effort">2</option>
									<option value="2.5" '.($uarray[$arr['uid']]['performance']==2.5?'selected="selected"':'').' data-v-type="effort">2.5</option>
									<option value="3" '.($uarray[$arr['uid']]['performance']==3?'selected="selected"':'').' data-v-type="effort">3</option>
									<option value="3.5" '.($uarray[$arr['uid']]['performance']==3.5?'selected="selected"':'').' data-v-type="effort">3.5</option>
									<option value="4" '.($uarray[$arr['uid']]['performance']==4?'selected="selected"':'').' data-v-type="effort">4</option>
									<option value="4.5" '.($uarray[$arr['uid']]['performance']==4.5?'selected="selected"':'').' data-v-type="effort">4.5</option>
									<option value="5" '.($uarray[$arr['uid']]['performance']==5?'selected="selected"':'').' data-v-type="effort">5</option>
							</select></div>';

	return $effort_select;
							
}
class GetEffortAverage {
    public $userid;
    public $pri;
    public function __construct($userid, $pri)
    {
        $this->pri = $pri; //Progress Report ID
        $this->userid = $userid;
    }
    public function getListOfAverageEffort() {
        $total = 0;
        $count = 0;
        $final = 0;
        $sql = db_query("SELECT * FROM progresstracker WHERE progressid = '".$this->pri."' AND uid = '".$this->userid."'");
        while($res = db_fetch_object($sql)) {
           // echo 'effort';
            //var_dump($res->performance);
            $total += $res->performance;
            $count++;
        }
        $final = ($total / $count);
        $o = 0;
        if($final < 0) {
           $o = 0;
        }
        if($final >= 1 && $final < 1.5) {
            $o = 1;
        }
        if($final >= 1.5 && $final < 2) {
            $o = 1.5;
        }
        if($final >= 2 && $final < 2.5) {
            $o = 2;
        }
        if($final >= 2.5 && $final < 3) {
            $o = 2.5;
        }
        if($final >= 3 && $final < 3.5) {
            $o = 3;
        }
        if($final >= 3.5 && $final < 4) {
            $o = 3.5;
        }
        if($final >= 4 && $final < 4.5) {
            $o = 4;
        }
        if($final >= 4.5 && $final < 5) {
            $o = 4.5;
        }
        if($final >= 5) {
            $o = 5;
        }
        return $o;


    }


}


function printclasslists_get_time_left_early_select_gym ($uarray, $arr) {
	$time_left_early_select = '<div class=time_left_early ><select class="dropdown-timeleftearly" name="timeleftearly['.$arr['uid'].']" >
									<option value="0" >-</option>
									<option value="5" '.($uarray[$arr['uid']]['leftearly']==5?'selected="selected"':'').'>5</option>
									<option value="10" '.($uarray[$arr['uid']]['leftearly']==10?'selected="selected"':'').'>10</option>
									<option value="15" '.($uarray[$arr['uid']]['leftearly']==15?'selected="selected"':'').'>15</option>
									<option value="20" '.($uarray[$arr['uid']]['leftearly']==20?'selected="selected"':'').'>20</option>
									<option value="25" '.($uarray[$arr['uid']]['leftearly']==25?'selected="selected"':'').'>25</option>
									<option value="30" '.($uarray[$arr['uid']]['leftearly']==30?'selected="selected"':'').'>30</option>
							</select></div>';	
							
	return $time_left_early_select;
}

function printclasslists_get_class_start_time ($class_node) {

	# Get the start time for this class
    
    
    $day = date('l');
    
    switch ($day) {
    	case 'Monday': 
    		$class_time_field = 'field_class_mon_time';
    		break;
    	
    	case 'Tuesday': 
    		$class_time_field = 'field_class_tue_time';
    		break;
    		
    	case 'Wednesday': 
    		$class_time_field = 'field_class_wed_time';
    		break;
    		
    	case 'Thursday': 
    		$class_time_field = 'field_class_thur_time';
    		break;
    		
    	case 'Friday': 
    		$class_time_field = 'field_class_fri_time';
    		break;

    	case 'Saturday': 
    		$class_time_field = 'field_class_sat_time';
    		break;
    }
    //print $class_time_field;

    $class_start_time = $class_node->{$class_time_field}[0]['value'];
    
    return $class_start_time;
	
}

function printclasslists_get_time_arrived ($uarray, $arr, $progress_report_id, $class_attendance, $uid) {
	
	/*print "<pre>";
	print_r ($arr);
	print "</pre>";
	
	print '<pre>';
	print_r ($uarray);
	print '</pre>';*/
	
	//print "progress report id ".$progress_report_id;
	
	$progress_report_node = node_load (array("nid" => $progress_report_id) );

	$class_id = $progress_report_node ->field_pr_class [0]['nid'];
	
	$class_node = node_load (array("nid" => $class_id) );

	$class_length = $class_node->field_c_length [0] ['value'];

	$class_start_time = printclasslists_get_class_start_time ($class_node);
	
	/*print "Class Start Time: ".$class_start_time."<br />";
	print "Class Length: ".$class_length."<br />";
	print "time Arrived: ".$arr['time_arrived']."<br />";*/
	
	if ($class_length == 'Variable') {
		$class_length = 180;
		
	}
	

	$class_start_time_modified = str_replace (":", "", $class_start_time);
	
	//print "class_start_time_modified: ".$class_start_time_modified."<br />"; 
	
	$increment_count = ($class_length / 5) -1;
	
	//print "<br />increment_count: ".$increment_count."<br />";

	if (strlen ( $arr['time_arrived'] ) == 8) { // time_arrived could be in the format 10:30 or 10:30:00
		$set_time_arrived = substr($arr['time_arrived'], 0, -3);
	}else {
		$set_time_arrived = $arr['time_arrived'];
	}
	
	$time_arrived = '<div class=time_arrived ><select class="dropdown-timearrived" name="timearrived['.$arr['uid'].']" >
	<option value="0" >-</option>';
	$count= 0;
	$count_inner = 0;
	$display_time = $class_start_time_modified;
	$display_time = substr_replace($display_time, ':', 2, 0);
	
	
	while ($count < $class_length) {
	
		//print "count: ".$count."<br />";
		//print "class_start_time_modified: ".$class_start_time_modified."<br />";
		//print "display_time: ".$display_time."<br />"; 
	
		if ($set_time_arrived == $display_time) {
			$selected = 'SELECTED';
			
		}else {
			$selected = '';
		}
	
		$time_arrived .= '<option value="'.$display_time.'" '.$selected.'>'.$display_time.'</option>';
		$count = $count + 5;
		$count_inner = $count_inner + 5;
		$time = $class_start_time_modified + $count_inner;
		
		if (strlen($time) < 4) {
			// add in the leading 0
			$time = "0".$time;
		}
		
		$display_time = substr_replace($time, ':', 2, 0);
		
		// check if we are on 60 minutes if so go to the next hour
		$t = explode (':',$display_time);
		
		//print "<pre>";
		//print_r ($t);
		//print "</pre>";
		
		if ($t[1]== '60') {
			//print "in <br />";
			$t[1] = '00';
			$t[0] = $t[0] + 1;
			$time = $t[0] . $t[1];
			if (strlen($time) < 4) {
				// add in the leading 0
				$time = "0".$time;
			}
			// reset class_start_time_modified;
			$class_start_time_modified = $time;
			
			//print "in time: ".$time."<br />";
			$display_time = substr_replace($time, ':', 2, 0);
			$count_inner = 0;
		}
	}
	
	$time_arrived .= '</select></div>';
							
	return $time_arrived;
}

function printclasslists_get_performance_select ($uarray, $arr) {
	$performance_select = '<div class=performance><select class="dropdown-counter" name="effort['.$arr['uid'].']" data-v-type="performance">
									<option value="0" data-v-type="performance">-</option>
									<option value="1" '.($uarray[$arr['uid']]['performance_real']==1?'selected="selected"':'').' data-v-type="performance">1</option>
									<option value="1.5" '.($uarray[$arr['uid']]['performance_real']==1.5?'selected="selected"':'').' data-v-type="performance">1.5</option>
									<option value="2" '.($uarray[$arr['uid']]['performance_real']==2?'selected="selected"':'').' data-v-type="performance">2</option>
									<option value="2.5" '.($uarray[$arr['uid']]['performance_real']==2.5?'selected="selected"':'').' data-v-type="performance">2.5</option>
									<option value="3" '.($uarray[$arr['uid']]['performance_real']==3?'selected="selected"':'').' data-v-type="performance">3</option>
									<option value="3.5" '.($uarray[$arr['uid']]['performance_real']==3.5?'selected="selected"':'').' data-v-type="performance">3.5</option>
									<option value="4" '.($uarray[$arr['uid']]['performance_real']==4?'selected="selected"':'').' data-v-type="performance">4</option>
									<option value="4.5" '.($uarray[$arr['uid']]['performance_real']==4.5?'selected="selected"':'').' data-v-type="performance">4.5</option>
									<option value="5" '.($uarray[$arr['uid']]['performance_real']==5?'selected="selected"':'').' data-v-type="performance">5</option>
							</select></div>';
							
	return $performance_select;
}

function printclasslists_get_class_length_select ($uarray, $arr) {
	$class_length_select = '<div class=class_length><select class="dropdown-classlength" name="classlength['.$arr['uid'].']" >
									<option value="135" '.($uarray[$arr['uid']]['classlength']==135?'selected="selected"':'').'>2:15</option>
									<option value="150" '.($uarray[$arr['uid']]['classlength']==150?'selected="selected"':'').'>2:30</option>
									<option value="165" '.($uarray[$arr['uid']]['classlength']==165?'selected="selected"':'').'>2:45</option>
									<option value="180" '.($uarray[$arr['uid']]['classlength']==180?'selected="selected"':'').'>3:00</option>
									
							</select></div>';
							
	return $class_length_select;
}

function printclasslists_get_time_left_early_select_skil ($uarray, $arr) {
	$time_left_early_select = '<div class=time_left_early ><select class="dropdown-timeleftearly" name="timeleftearly['.$arr['uid'].']" >
									<option value="0" >-</option>
									<option value="5" '.($uarray[$arr['uid']]['leftearly']==5?'selected="selected"':'').'>5</option>
									<option value="10" '.($uarray[$arr['uid']]['leftearly']==10?'selected="selected"':'').'>10</option>
									<option value="15" '.($uarray[$arr['uid']]['leftearly']==15?'selected="selected"':'').'>15</option>
									<option value="20" '.($uarray[$arr['uid']]['leftearly']==20?'selected="selected"':'').'>20</option>
									<option value="25" '.($uarray[$arr['uid']]['leftearly']==25?'selected="selected"':'').'>25</option>
									<option value="30" '.($uarray[$arr['uid']]['leftearly']==30?'selected="selected"':'').'>30</option>
									<option value="35" '.($uarray[$arr['uid']]['leftearly']==35?'selected="selected"':'').'>35</option>
									<option value="40" '.($uarray[$arr['uid']]['leftearly']==40?'selected="selected"':'').'>40</option>
									<option value="45" '.($uarray[$arr['uid']]['leftearly']==45?'selected="selected"':'').'>45</option>
									<option value="50" '.($uarray[$arr['uid']]['leftearly']==50?'selected="selected"':'').'>50</option>
									<option value="55" '.($uarray[$arr['uid']]['leftearly']==55?'selected="selected"':'').'>55</option>
									<option value="60" '.($uarray[$arr['uid']]['leftearly']==60?'selected="selected"':'').'>60</option>
									
									<option value="65" '.($uarray[$arr['uid']]['leftearly']==65?'selected="selected"':'').'>1:05</option>
									
									<option value="70" '.($uarray[$arr['uid']]['leftearly']==70?'selected="selected"':'').'>1:10</option>
									
									
									<option value="75" '.($uarray[$arr['uid']]['leftearly']==75?'selected="selected"':'').'>1:15</option>
									
									<option value="80" '.($uarray[$arr['uid']]['leftearly']==80?'selected="selected"':'').'>1:20</option>
									
									<option value="85" '.($uarray[$arr['uid']]['leftearly']==85?'selected="selected"':'').'>1:25</option>
									
									<option value="90" '.($uarray[$arr['uid']]['leftearly']==90?'selected="selected"':'').'>1:30</option>
									
									<option value="95" '.($uarray[$arr['uid']]['leftearly']==95?'selected="selected"':'').'>1:35</option>
									
									<option value="100" '.($uarray[$arr['uid']]['leftearly']==100?'selected="selected"':'').'>1:40</option>
									
									<option value="105" '.($uarray[$arr['uid']]['leftearly']==105?'selected="selected"':'').'>1:45</option>
									
									<option value="110" '.($uarray[$arr['uid']]['leftearly']==110?'selected="selected"':'').'>1:50</option>
									
									<option value="115" '.($uarray[$arr['uid']]['leftearly']==115?'selected="selected"':'').'>1:55</option>
									
									<option value="120" '.($uarray[$arr['uid']]['leftearly']==120?'selected="selected"':'').'>2:00</option>
									
							</select></div>';
	return $time_left_early_select;
}

function printclasslists_get_comment_html ($uarray, $arr) {
	$comment_html = '<br /><div class=gymnast_comment>
  <input id="gymnast_comment_'.$arr['uid'].'" name="gymnast_comment_'.$arr['uid'].'" type="text" value="'.$uarray[$arr['uid']]['coach_note'].'" class="gymnast_comment_text"/>
	<input type="button" name="button_'.$arr['uid'].'" id="button_'.$arr['uid'].'" value="Save" class="gymnast_save_button" />

</div>';

	return $comment_html;
}

function printclasslists_get_current_badge_text ($overall_score_student, $arr, $gender_type) {

	$current_badge_text = gym_badge_get_badge ($overall_score_student[ $arr['uid'] ]['badge']);

	$current_badge_text .= '<div class=current_badge_text><a href="/diarygymbadge/'.$arr['uid'].'/G/'.$gender_type.'" target=_blank class="badgeletter">G</a>&nbsp; &nbsp;<a href="/diarygymbadge/'.$arr['uid'].'/Y/'.$gender_type.'" target=_blank class="badgeletter">Y</a>&nbsp; &nbsp;<a href="/diarygymbadge/'.$arr['uid'].'/M/'.$gender_type.'" target=_blank class="badgeletter">M</a></div>';
	
	return $current_badge_text;
}

//XXX
function getcriteriaforcoach($user, $badge) {
    /*
     * */
    $content = "<div class='criteriaforcoach' style=\"width: 100%;float: right;margin-top: 4px;\">";
    $sql = db_query("SELECT * FROM {_criteriapercoach} WHERE coachid = '%s' AND badge = '%s' ", $user->uid, $badge);
    $criteria = "";
    while($row = db_fetch_object($sql)) {
        $criteria = $row->criteria;
    }
    $criteria_clean = explode(" ", $criteria);
    for($i = 0 ; $i < count($criteria_clean); $i++) {
        $sqla = db_query("SELECT * FROM {_criteriaperbadge} WHERE cid = '%s' AND badge = '%s' ", $criteria_clean[$i], $badge);
        while($row = db_fetch_object($sqla)) {
            $content .= '<div style="display: block;width: 100%;background-color: #e6e6e6;padding: 6px;margin-bottom: 1px;" ><div style="width: 88px;background-color: #d8d5d5;padding: 1px;margin-right: 5px;font-size: 12px;">'.$row->level.'</div><div style="font-size: 12px;font-weight: bold;">'.$row->criteria_name.'</div><div style="float: right;"><input style="float: right;transform: scale(1.3);margin: 4px;" type="checkbox"></di v><div style="clear:both"></div></div>';
        }   
    }
    return $content .= "</div>";

}
//XXX
function printclasslists_get_gymnast_row_div ($cri, $user, $badge, $gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down="", $time_arrived){

    if($badge == "GYM-Badge" && $user == false) {
        $criterialist = $cri->displayCriteriaInput();
        $return = "<div class='gymnast_row{$badge_style} $sclass $style day-colour-$day' id='".$gymnast_key."_".$arr ['uid']."'><div class=gymnast_name>".$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value']." ".$check." </div> $effort_select $performance_select $class_length_select  $current_badge_text $group_drop_down $criterialist $comment_html</div>";
    }
    else {
        $criterialist = "";/* = getcriteriaforcoach($user,$badge);*/
        $return = "<div class='gymnast_row{$badge_style} $sclass $style day-colour-$day' id='" . $gymnast_key . "_" . $arr ['uid'] . "'><div class=gymnast_name>" . $arr['profile_values_profile_last_name_value'] . " " . $arr['profile_values_profile_first_name_value'] . " " . $check . " </div> $effort_select $performance_select $class_length_select $time_left_early_select $time_arrived $current_badge_text $group_drop_down $criterialist $comment_html</div>";
    }
	
	return $return;						
}
class CriteriaGYMBadgePerCoach {
    public $userid;
    public $coachid;
    public $badge;
    public $progress_report_id;
    public $classid;
    public $gender;
    public $lowerGender;
    public function __construct($userid, $coachid, $badge, $progress_report_id, $class_id, $gender)    {
        $this->userid = $userid;
        $this->coachid = $coachid;
        $this->badge = $badge;
        $this->progress_report_id = $progress_report_id;
        $this->classid = $class_id;

        if($gender == "Girls") {
            $this->sub_gender = "Female";
        }
        else if($gender == "Boys") {
            $this->sub_gender = "Male";
        }
        if($gender == "Girls") {
            $this->lowerGender = "girls";
        }
        else if($gender == "Boys") {
            $this->lowerGender = "boys";
        }

    }

    public function getCriteriaValuesAssignedToCoach() {
            //This get all the criteria for the coach per gymnast user.
            $res = db_query("SELECT * FROM coach_competency_allocation WHERE progress_report_id = '%s' AND coach_id = '%s' AND class = '%s' AND class_id = '%s' AND sub_gender ='%s' AND sub_badge = '%s'", $this->progress_report_id, $this->coachid, $this->badge, $this->classid, $this->sub_gender,$this->getBadgeAssignedToChild());
            $criteria = "";
            while($row = db_fetch_object($res)) {
                $criteria = $row->competency;
            }
            $criteriaarray = explode(" ", $criteria);

            return $criteriaarray;
    }
    public function displayCriteriaInput() {
        $criteria = $this->buildCriteria();
        $output = "";
        $count = 1;
        $output .= "<div style=\"float: right;width: 500px;\"><div class='student_criteria_name' style='float: left;width: 301px; padding: 10px'></div><div class='student_basic' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'>Required</div><div class='student_advanced' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'>Advanced</div><div class='clear'></div>";
        foreach($criteria as $criteria_item) {
            $output .= "<div data-userid='".$this->userid."' data-gcid='".$criteria_item['gcid']."' data-badge='".$this->getBadgeAssignedToChild()."' data-coachid='".$this->coachid."' class='student_criteria' style='width: 500px;background-color: rgba(1, 1, 1, 0.17);margin-bottom: 1px; font-size: 11px; float: right;'>";
            $output .= "<div class='student_criteria_name' style='float: left;width: 320px; padding: 10px'>#". $criteria_item['text']./*$comps[1]$count.*/ "</div>";
            if($this->getCriteriaTicked($criteria_item['gcid'], 'basic')) {
                $output .= "<div class='student_basic' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'><input class='basic_check'  style=\"transform: scale(1.5);\"type='checkbox' checked></div>";
            }
            else {
                $output .= "<div class='student_basic' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'><input class='basic_check'  style=\"transform: scale(1.5);\"type='checkbox'></div>";
            }
            if($this->getCriteriaTicked($criteria_item['gcid'], 'advanced')) {
                $output .= "<div class='student_advanced' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'><input class='advanced_check' style=\"transform: scale(1.5);\" type='checkbox' checked></div><div class='clear'></div></div><div class='clear'></div> ";
            }
            else {
                $output .= "<div class='student_advanced' style='width: 85px; float: left; padding: 10px; padding-left: 20px;'><input class='advanced_check' style=\"transform: scale(1.5);\" type='checkbox'></div><div class='clear'></div></div><div class='clear'></div> ";
            }
            $count++;
        }
        $output .= "<div class='clear'></div></div>";
        return $output;

    }
    public function getCriteriaTicked($criteria_id, $type) {
        if($type == 'basic') {
            $sql = db_query("SELECT * FROM gym_diary WHERE gcid = '%s' AND uid = '%s' AND badge = '%s' AND coach_competent_basic = '1'", $criteria_id, $this->userid, $this->getBadgeAssignedToChild());
        }
        if($type == 'advanced') {
            $sql = db_query("SELECT * FROM gym_diary WHERE gcid = '%s' AND uid = '%s' AND badge = '%s' AND coach_competent_advanced = '1'", $criteria_id, $this->userid, $this->getBadgeAssignedToChild());
        }

        $has = false;
        while($row = db_fetch_object($sql)) {
            $has = true;
        }
        return $has;

    }
    public function buildCriteria(){
        $criterianew = array();
        $countGroup = 0;
        foreach ($this->getCriteriaValuesAssignedToCoach() as $criteria) {
            //echo 'criteria' . $criteria;
            $continue = true;
            $count = 0;

            for($i = 0; $i <= $criteria + 10; $i++) {
                $criteriaa = "";
                $res = db_query("SELECT * FROM gym_criteria WHERE number = '%s' AND gender = '%s' AND badge = '%s'", $criteria + $i, $this->lowerGender, $this->getBadgeAssignedToChild());
                while ($row = db_fetch_object($res)) {
                    if ($continue == true) {
                        if($row->type == 'c') {
                            $criteriaa = $row->competency;
                            $criterianew[$countGroup]['gcid'] = $row->gcid;
                            $criterianew[$countGroup]['number'] = $row->number;
                            $criterianew[$countGroup]['text'] = $row->category;
                            $criterianew[$countGroup]['badge'] = $row->badge;
                            $countGroup++;
                        }
                        if($row->type == 'h') {
                            $count++;
                        }
                        if($count >=2) {
                            $continue = false;
                        }

                    }

                }

            }
        }
        //var_dump($criterianew);
        return $criterianew;
    }
    public function getCriteriaTextForAllCriteria() {
        $criteriaarray = $this->getCriteriaValuesAssignedToCoach();

        foreach ($criteriaarray as $criteria) {
            $res = db_query("SELECT * FROM gym_criteria WHERE number = '%s' AND badge = '%s'", $criteria, $this->getBadgeAssignedToChild());
            while($row = db_fetch_object($res)) {
                var_dump($row);
            }
        }
    }
    public function getCriteriaTextForCriteria($criterianumber) {
            $res = db_query("SELECT * FROM gym_criteria WHERE number = '%s' AND badge = '%s'",$criterianumber, $this->getBadgeAssignedToChild());
            while($row = db_fetch_object($res)) {
                return $row->category;
            }

    }
    public function getCriteriaID($criterianumber) {
        $res = db_query("SELECT * FROM gym_criteria WHERE number = '%s' AND badge = '%s'",$criterianumber, $this->getBadgeAssignedToChild());
        while($row = db_fetch_object($res)) {
            return $row->gcid;
        }

    }
    public function getBadgeAssignedToChild() {
        $res = db_query("SELECT * FROM gym_total WHERE uid = '%s'", $this->userid);
        $badge = null;
        while($row = db_fetch_object($res)) {
            $badge = $row->badge;
        }
        if($badge == null) {
            $badge = "G";
        }
        else if($badge == "G") {
            $badge = "Y";
        }
        else if($badge == "Y") {
            $badge = "M";
        }
        else if($this->badge == "M") {
            $badge = "M";
        }
        return $badge;

    }
    public function dumpConstructorVars() {
//$this->getCriteriaValuesAssignedToCoach();
//$this->getCriteriaText();
var_dump($this->buildCriteria());
       /* echo 'coachid';
        var_dump($this->coachid);
        echo 'badge';
        var_dump($this->badge);
        echo 'progressreportid';
        var_dump($this->progress_report_id);
        echo 'classid';
        var_dump($this->classid);*/
    }
    public function a() {
        if ( is_numeric ($_POST ['group']) ) {
            // display criteria allocated to this coach for sign off
            $return .= "<h4><b>Group Selected:</b> ".$_POST ['group']."</h4><br />";

            $query = "SELECT * from coach_competency_allocation WHERE coach_id = '%s' ORDER  BY cccid DESC LIMIT 1";

            $result = db_query ($query, $user->uid);
            $counter = 0;
            while ($row = db_fetch_object ($result) ) {

                //var_dump($row);
                $counter ++;

                // explode the criteria out

                $criteria_arraya = explode (" ", $row->competency);

                switch ($row->class) {
                    case 'FUN-Badge 0':
                        $badge = 'F';
                        break;
                    case 'FUN-Badge 1':
                        $badge = 'U';
                        break;
                    case 'FUN-Badge 2':
                        $badge = 'N';
                        break;

                }

                // Fetch the criteria based on the class/badge

                foreach ($criteria_arraya as $c) {

                    $query = "SELECT * from fun_criteria_new WHERE `criteria_no` = ".$c." AND `badge` = '".$badge."';";

                    $fun_result = db_query ($query);

                    //$counter = 0;

                    while ($f_row = db_fetch_object ($fun_result) ) {

                        if ($f_row->gender == 'boys') {
                            $style = 'boys';
                        }else {
                            $style = 'girls';
                        }

                        $return_criteria .= "<div class=$style>#".$c." ".$f_row->category . "</div>";
                        $counter ++;

                        $criteria_array [$f_row->fcid] ['gender'] = $f_row->gender;
                        $criteria_array [$f_row->fcid] ['fcid'] = $f_row->fcid;
                        $criteria_array [$f_row->fcid] ['criteria_no'] = $f_row->criteria_no;

                    }

                    if ($counter == 0) { // criteria not found
                        $return_criteria .= "<div class=error>Criteria Number <b>$c</b> not found - contact Admin</div>";
                    }

                    $criteria_heading .= "<div class=criteria_count>$c</div>";

                }
            }


            if ($counter) {
                $return .= "<h4>The following Criteria have been allocated to you to evaluate for each gymnast for <b>$badge</b> Badge.  Each criteria has a basic (first check box) and advanced (second check box) version of the skill.</h4>";
                $return .= $return_criteria;
            }else {
                $return .= "<h4>No criteria have been allocated to you to evaluate - please contact coach admin.</h4>";
            }

            // display list of gymnasts in this group with:
            // Time arrived, Effort, Criteria allocated to this coach

            $arr_students = progresstracker_return_users ($key, FALSE, $day, $break);
            $pnode = node_load ($progress_report_id);
            $cnode = node_load (array ("nid"=>$pnode->field_pr_class[0]['nid']));

            // Get all the attendance and progress marks and store in an array for this progress report

            //$class_attendance = progresstracker_get_attendance_progress (arg(1), $roleid);

            $date = date('Y-m-d');
            $pnode = node_load ($progress_report_id);
            $cnode = node_load (array ("nid"=>$pnode->field_pr_class[0]['nid']));
            $fullday = date("l", strtotime($reportdate));

            $class_attendance = progresstracker_get_attendance_per_class ($year, $weekno, $date, $class, $role_id, $progress_report_id, $day);

            //$return .= drupal_get_form('progresstracker_capture_form', $attendanceprogress, $arr_students, $break, $pnode, $cnode, $roleid, $class_attendance);

            $return .= printclasslists_fun_coach_capture_skills ($user->uid, $criteria_heading, $criteria_array, $_POST ['group'], $class, $date, $year, $fullday, $day, $weekno, $attendanceprogress, $arr_students, $pnode, $cnode, $roleid, $class_attendance, $reportdate, $admin_override);

            // progresstracker_return_users_per_fun_group ($group_no, $year, $progress_report_id, $class_id, $role_id)

        }

    }
}

function printclasslists_get_group_drop_down ($uarray, $arr) {

	if ($uarray[$arr['uid']]['coach_station'] && $uarray[$arr['uid']]['coach_station'] != 0) {
		$selected = "";
	}else $selected = "selected";

	$group_drop_down = '<div class=group_drop_down><select class="progresstracker_get_javascript_fun_allocation" name="groupid['.$arr['uid'].']" >
	<option value="0" '.$selected.'>-Select Group-</option>';
	
	for ($x = 1; $x <= 10; $x++) {
		
		$station = 'Group '.$x;
		
			
		if ( $uarray[$arr['uid']]['groupnumber'] == $x ) {
			$selected = 'selected';
		}else $selected = '';
		
		$group_drop_down .= '<option value="'.$x.'" '.$selected.'>'.$station.'</option>\n';
	}  
	
	$group_drop_down .= "</select></div>";
					
	return $group_drop_down;
}

/* get the row variables for Busters for Coaches to check off criteria and select effort */
function printclasslists_get_row_variables_busters_for_coach (&$effort_select, $criteria_array, &$current_badge_text, $arr_students, $uarray, $arr) {
	$effort_select = printclasslists_get_effort_select ($uarray, $arr);
	
	$current_badge_text = printclasslists_get_current_badge_text ($overall_score_student, $arr, $gender_type);
}


function printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $gender_type, $is_FUN_BADGE=false, &$group_drop_down="", &$time_arrived, $class_attendance = "", $progress_report_id, $userid) {

	/*print "<pre>";
	print_r ($uarray);
	print "</pre>";*/
	
	//print "class length: ".$class_length_select;
	//print "<br />";
	//print arg(1);	
	//$progress_report_id = arg(1);
    //var_dump($userid);
    //var_dump($arr);
	$effort_select = printclasslists_get_effort_select ($uarray, $arr, $userid, $progress_report_id);
	
	if ($is_GYM_BADGE || $is_FUN_BADGE) {
		$time_left_early_select = printclasslists_get_time_left_early_select_gym ($uarray, $arr);
		if($is_FUN_BADGE) {
            if ($admin_override) {
                // display a comment field for the gymnast for admin users
                $comment_html = printclasslists_get_comment_html($uarray, $arr);
            }
        }
        else if($is_GYM_BADGE) {
            //DISPLAY COMMENTS FOR COACHES
            $comment_html = printclasslists_get_comment_html($uarray, $arr);
        }
		
        if($is_FUN_BADGE) {
            $group_drop_down = printclasslists_get_group_drop_down($uarray, $arr);
        }
		
			//$time_arrived = printclasslists_get_time_arrived ($uarray, $class_attendance, $progress_report_id);
			
		
			
			//print "<pre>";
			//print_r ($arr['uid']); 
			//print "</pre>";

		// get the time arrived for attendance drop down
		$time_arrived = printclasslists_get_time_arrived ($uarray, $arr, $progress_report_id, $class_attendance);
		
		//print "time arrived: $time_arrived <br />";
		
	} else {
		# SKIL badge
				
		$performance_select = printclasslists_get_performance_select ($uarray, $arr);
												
		$class_length_select = printclasslists_get_class_length_select ($uarray, $arr);
								
		$time_left_early_select = printclasslists_get_time_left_early_select_skil ($uarray, $arr);
								
		$comment_html = printclasslists_get_comment_html ($uarray, $arr);
		
		// get the time arrived for attendance drop down
		$time_arrived = printclasslists_get_time_arrived ($uarray, $arr, $progress_report_id, $class_attendance);
							
	}
							
	if ($is_GYM_BADGE) {
							
		$current_badge_text = printclasslists_get_current_badge_text ($overall_score_student, $arr, $gender_type);
	}
	
	if ($is_FUN_BADGE) {
		$current_badge_text = printclasslists_get_current_badge_text ($overall_score_student, $arr, $gender_type);
	}
}

/* get all the gymnasts for a particular coach for a class for capturing of effort, time left early, time arrived */
function printclasslists_get_coach_capture_list ($groupa, $class, $date, $year, $fullday, $day, $weekno, $role_id, $classid, $progress_report_id, $reportdate,$coachid, $show_coach_name = false, $admin_override = false, $is_GYM_BADGE = false, $admin_override = false) {
	


    $output .= $outputa;
	
	// Get Role for this class
	//$role_id = get_role_name ($class);
	
	// get the group (eg Boys A, Boys B) for the current coach, class & week
	
	if ($is_GYM_BADGE) {
	

        if ($admin_override) {
            $group = get_group_allocated_to_coach ($weekno, $role_id, $coachid);

        }
        else {
            $group = $groupa;
        }
        //$group = $groupa;
		//print "weekno: $weekno | roleid: $role_id | coachid: $coachid ";
	
		// Get overall scores and badges for the students
		$disable_class_total = false;
		if($class == 'GYM-Badge 1' || $class == 'GYM-Badge 2')		
		{	
			$overall_score_student = gym_badge_get_overall_score ();
			$disable_class_total = true;
		}/*elseif($class == 'SKIL-Badge'){
			$overall_score_student = skill_badge_get_overall_score ();
		}elseif ($class == 'FUN-Badge 1' || $class == 'FUN-Badge 2') {
		
		}*/
	
		if ($group) {
			if (strpos($group, 'Boys') !== false) {
				$gender = 'Boys';
			}else {
				$gender = 'Girls';
			} 
		}else {
			//if ($admin_override) {
				// the coach is admin or membership manager so we don't want to redirect back to the homepage as the admin can see all the classes for the day
			//	return "<p>Note that a group for <b>".$class."</b> has not been allocated to you for the week.</p>";
			//	$group = "";
			//}else {
			//	drupal_set_message('A group for <b>'.$class.'</b> has not been allocated to you for the week.  Please contact the website admin.','error');
			//	drupal_goto("");
			//}
		}
	}else {
		$group = 'All';
	}
	
	
	if ($is_GYM_BADGE) {
	
		if ($gender == 'Boys') {
    		$boys_or_girls = 'Boys';
    		$gender_formal = 'Male';
    		$gender_type = 'boys';
    		$gender_short = 'M';
    		$cat_arr =  array ('Group 1', 'Group 2', 'Group 3', 'Group 4', 'Group 5', 'Group 6', 'Group 7', 'Group 8');
    	}else {
    		$boys_or_girls = 'Girls';
    		$gender_formal = 'Female';
    		$gender_type = 'girls';
    		$gender_short = 'F';
    		$cat_arr =  array ('Group 1', 'Group 2', 'Group 3', 'Group 4', 'Group 5', 'Group 6', 'Group 7', 'Group 8');
    	}
    }

	// get any previous results
	$uarray = getprogressdata($class, $reportdate, $coachid);
	
	/*print "<pre>";
	print_r ($uarray);
	print "</pre>";*/
	
	/*$xdate = $reportdate." 23:00:00";
	$query = "select field_c_length_value from content_type_class where UNIX_TIMESTAMP(field_c_dates_value) <= ".
		strtotime($xdate)." and ".strtotime($xdate)." <= UNIX_TIMESTAMP(field_c_dates_value2) and field_c_type_value='".$class."'".
		$extra;
	$leng = db_result(db_query($query));*/

	$date = date("Y-m-d", strtotime($reportdate));
	$fullday = date("l", strtotime($reportdate));    
	
	// Get corresponding gymnast
	$progress_report = get_progress_report ($reportdate, $class);
	
	// Get the corresponding class id
	$temp_result = checkadmin($class, $reportdate);
	$classid = $temp_result ['cid'];
	
	if ($progress_report) {
		$progress_report_id = $progress_report['pid'];
	}
	
	drupal_set_title("Capture results for my class on $fullday: " . $class . " - ".$group." ($reportdate)");
	
	$badtxt = $class; 
	if ($class=='GYM-Badge 1') {
			//$badtxt = 'GYM-Badge 1 & TID-Badge 1';
			$badtxt = 'GYM-Badge 1';
    }
	
	if ($class=='GYM-Badge 2') {
		//$badtxt = 'GYM-Badge 2 & TID-Badge 2';
		$badtxt = 'GYM-Badge 2';
	}
    
    if ($class=='TID') {
		$badtxt = 'TID';
	}
	
	if ($class=='SKIL-Badge') {
		$badtxt = 'SKIL-Badge & ELITE';
    }
    
    $roleid2 = FALSE;
	if ($class=='GYM-Badge 1') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 1');
    }
	if ($class=='GYM-Badge 2') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 2');
    }
	if ($class=='SKIL-Badge') {
		$roleid2 = printclasslists_extract_role_id('Elite');
    }
    
    if ($is_GYM_BADGE) {
    
    	# fetch all the gymnasts who are in this class
    
    	$arr_students = printclasslists_return_users($groupa, $role_id, $roleid2, 'all', &$break, $class, $date);
    
    	$week_schedule_array = printclasslists_return_gymnast_week_schedule ($class, $weekno, $year, $gender_short, $remove_arr);
    	
    	/*print 'week_schedule_array: <pre>';
    	print_r ($week_schedule_array);
    	print '</pre>';
    	
    	print 'remove arr<pre>';
    	print_r ($remove_arr);
    	print '</pre>';*/
    	
    }else {
    	# fetch all the gymnasts who are for this coach
    	# SKIL-Badge gymnasts are allocated to a coach
    	
    	//$result = get_students_for_coach ($coachid);
    	
    	$arr_students = group_return_users($groupa, $role_id, $roleid2, $day, &$break, $coachid, $class, $date);
    	
    	// fetch all gymnasts who may have moved from a day
    	$week_schedule_array = printclasslists_return_gymnast_week_schedule ($class, $weekno, $year, $gender_short, $remove_arr);
    	
    	//printclasslists_build_user_arr($arr_students, $result, &$counter);
    	
    }
    
   /* print "<pre>";
    print_r ($arr_students);
    print "</pre>";*/
    
    if ($show_coach_name) {
		$temp_coach = get_user_first_last($coachid);
        $output .= "<h3>".$class.": ".$temp_coach."</h3>";
    }
    
    global $user;
    if ($is_GYM_BADGE) {
        if(!$admin_override) {
            $output .= "<div class='gymnast_header'><div class='gymnast_name'>Gymnast Name</div><div class='effort'>Effort</div><!--<div class='time_left_early'>Left Early</div><div class='time_arrived'>Time Arrived</div>--><div class='current_badge'>Badge</div></div>";
        }
        else {
            $output .= "<div class='gymnast_header'><div class='gymnast_name'>Gymnast Name</div><div class='effort'>Effort</div><div class='time_left_early'>Left Early</div><div class='time_arrived'>Time Arrived</div><div class='current_badge'>Badge</div></div>";
        }
    	
    	$badge_style = "";
    } else {
    	/* Fields for SKIL Badge  
    	time trained | Effort | Performance | comment
    	*/
    	    	
    	$output .= "<div class='gymnast_header_skil'><div class='gymnast_name'>Gymnast Name</div><div class='effort'>Effort</div><div class='performance'>Performance</div><div class='class_length'>Class Length</div><div class='time_left_early'>Left Early</div><div class='time_arrived'>Time Arrived</div></div>";
    	// <div class='coach_comment'>Comment (not visible to parent)</div>
    	
    	$badge_style = "_skil";
    }
	
	// Get overall scores and badges for the students
	$disable_class_total = false;
	if($class == 'GYM-Badge 1' || $class == 'GYM-Badge 2')		
	{	
		$overall_score_student = gym_badge_get_overall_score ();
		$disable_class_total = true;
	}
	elseif($class == 'SKIL-Badge')
	{
		$overall_score_student = skill_badge_get_overall_score ();
		$is_SKIL_BADGE = true;
	}
	
	// Get all the gymnasts
	$bcat = $group;
	$counter =0;

	//print "is gym bdage: $is_GYM_BADGE <br />";
	
	$class_attendance = progresstracker_get_attendance_per_class ($year, $weekno, $date, $class, $role_id, $progress_report_id, $day);
	
	foreach ($arr_students as $arr) {
	
		/*print "<pre>";
		print_r ($class_attendance);
		print "</pre>";
		
		print "<pre>";
		print_r ($arr);
		print "</pre>";*/
		
		if ($class_attendance [ $arr['uid'] ]['attendance']) {
        	$check = "<img src ='/sites/default/files/check-icon.png'>";
			$arr ['attendance'] = 1;
        	$arr ['time_arrived'] = $class_attendance [ $arr['uid'] ]['time_arrived'];
			//print "arr time arrived: ".$arr ['time_arrived']."<br />";
        }else {
        	$check = "";
        	$arr ['attendance'] = 0;
        	$arr ['time_arrived'] = "";
        }
	
	
		if ($arr ['gender'] == $gender_formal OR !$is_GYM_BADGE ) {
					$style = "";
					//print "in1 <br />";
					if ($arr [$day] && ($arr ['category'] == $bcat)) {
						if ($counter % 2 == 0) {
            				$sclass = 'gymnast_even';
        				} else {
            				$sclass = 'gymnast_odd';
        				}
        				
        				//print "in2 <br />";
        				
						if ($arr ['user_multi_role'] == 'Trial') {
							$style = 'trial';
							
							// $js_trial_data_list_array [$day] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "'.ucfirst($day).': '.$bcat.'" , userid: "'.$arr['uid'].'"},';
							
						}else {
							$style = 'notrial';
							
							// $js_data_list_array [$day] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "'.ucfirst($day).': '.$bcat.'" , userid: "'.$arr['uid'].'"},';
						}
					
						// Check if gymnast is in the remove_arr, whereby the gymnast has been moved to another day so that we should not 
						$add = printclasslists_check_if_in_remove_arr ($remove_arr, $day, $arr, $bcat);
									 
						if ($add) {
							$counter ++;
							
							$gymnast_key = $day."999".$style;
							
							/*printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls);
							
							$gymnast_list_array [$day] [$bcat] .= printclasslists_get_gymnast_row_div ($gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day);*/
							
							/* comment out above */
							
							printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls, $is_FUN_BADGE, &$group_drop_down, $time_arrived, $class_attendance, $progress_report_id, $arr['uid']);

							//XXX
                            $cri = new CriteriaGYMBadgePerCoach($arr['uid'], $coachid, $class, $progress_report_id, $classid, $gender);
							$gymnast_list_array [$day] [$bcat].= printclasslists_get_gymnast_row_div ($cri, $admin_override,'GYM-Badge',$gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down, $time_arrived);
						}
						
					}elseif ($arr ['user_multi_role'] == 'Trial' && $arr ['category'] == $bcat && !$arr ['monday'] && !$arr ['tuesday'] && !$arr ['wednesday'] && !$arr ['thursday'] && !$arr ['friday'] && !$arr ['saturday']) {
						// Trialist has not been allocated to a day
						
						if (array_search ($arr ['uid'] , $trialist_ids_arr, true) === FALSE) {
							// check to see if the trialist has already been added to $js_trial_data_list_array
							/*array_push ($trialist_ids_arr, $arr ['uid']);
							$js_trial_data_list_array ['unknown'] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "No Day Allocated: '.$bcat.'" , userid: "'.$arr['uid'].'"},';*/
						}					
					}
				}
	}
	
		// Add any gymnasts to the end of the $gymnast_list_array who have moved 
	
	/*print '<pre>';
	print_r ($week_schedule_array);
	print '</pre>';*/
	
	if (is_array ($week_schedule_array) ) {
		
	
		foreach ($week_schedule_array as $u ) {
		
		// check to see that the gymnast moved matches day, gender and group
		
		// print "bcat: $bcat<br />";
		// print "day: $day <br />";
		
		/*if ($u['userid'] == 1296) {
			print $u['group']."<br />---";
			print $u['day_of_the_week'];
		}*/
		
		if ( ($u['group'] == $bcat && $u['day_of_the_week'] == $day) OR ($is_SKIL_BADGE && $u['group'] == $coachid && $u['day_of_the_week'] == $day ) ) {
		//print "<br >** in";
		// for SKIL Badge, $u['group'] = coach's id

		if ($u['group'] != 'scratch_area_list') {
		
			if ($counter % 2 == 0) {
            	$sclass = 'gymnast_even';
        	} else {
            	$sclass = 'gymnast_odd';
        	}
			
			$counter++;
			
			$user_load = user_load($u['userid']);
			
			if ($class_attendance [$u['userid']]['attendance']) {
        		$check = "<img src ='/sites/default/files/check-icon.png'>";
				$arr ['attendance'] = 1;
        		$arr ['time_arrived'] = $class_attendance [ $u['userid'] ]['time_arrived'];
        	}else {
        		$check = "";
        		$arr ['attendance'] = 0;
        		$arr ['time_arrived'] = "";
        	}
			
			/*print '<pre>';
			print_r ($user_load);
			print '</pre>';*/
			
			if ($u['trial']) {
				$trial_style = 'trial';
			}else {
				$trial_style = 'notrial';
			}
			
			if ($u['moved']) {
				
				$gymnast_key = $u['day_moved_from']."999".$style;
				//$day_of_the_week = $u['day_of_the_week'];
				$style = "$trial_style moved";
				
				
			}elseif ($u['catch_up']) {
				
				$gymnast_key = 'catchup';
				$style = "$trial_style catchup";
			}
			
			//$gymnast_key = $day."999".$style;
			
			$arr['uid'] = $u['userid'];
			$arr['profile_values_profile_last_name_value'] = strtoupper($user_load->profile_last_name);
			
			$arr['profile_values_profile_first_name_value'] = $user_load->profile_first_name;
							
			/*printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls);
							
			$gymnast_list_array [$day] [$bcat] .= printclasslists_get_gymnast_row_div ($gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day);*/
			
			/* comment above */
			
			printclasslists_get_row_variables (&$effort_select, &$time_left_early_select, &$performance_select, &$class_length_select, &$time_left_early_select, &$comment_html, &$current_badge_text, $uarray, $arr, $is_GYM_BADGE, $overall_score_student, $admin_override, $boys_or_girls, $is_FUN_BADGE, &$group_drop_down, $time_arrived, $class_attendance, $progress_report_id);

			//XXX
            $cri = new CriteriaGYMBadgePerCoach($userid, $coachid, $class, $progress_report_id, $classid);
			$gymnast_list_array [$day] [$bcat].= printclasslists_get_gymnast_row_div($cri, $admin_override,'GYM-Badge',$gymnast_key, $arr, $check, $effort_select, $performance_select, $class_length_select, $time_left_early_select, $current_badge_text, $comment_html, $badge_style, $sclass, $style, $day, $group_drop_down, $time_arrived);
			
			// load the user
			
		}
		} // end if ($u['group'] == $bcat && $u['day_of_the_week'])
		} // end if foreach
	}
	
	// add gymnasts to the 'search field' so that a coach can add if someone is missing from the array.
	
	// function not working yet, decided not to give coaches the ability to add gymnasts to their class list
	// instead gymnast must be sent back to the front desk (Ethel) to move/add the gymnast
	//$output .= printclasslists_add_search_bar_for_coach($day, $bcat, $coach, $gender, $js_trial_data_list_array, $js_data_list_array);
	
	$output .= printclasslists_print_students_per_day_for_coach ($gymnast_list_array, $day, $bcat, $coach);
	
	if ($counter) {
		return $output;
	} else {
		return false;
	} 
}

function printclasslists_get_coach_capture_footer () {
	$output = "<table class=coachkey><tr><th colspan=1>KEY</th></tr>
	<tr><td class='trial'>Trial - YELLOW BACKGROUND</td></tr>
	<tr><td class=catchup>Catch Up - BLUE BACKGROUND</td></tr>
	<tr><td class=moved>Moved - GREEN BACKGROUND</td></tr>
	<tr><td class=alert_red>Talk to Chad: High or Low Effort - RED BORDER</td></tr>
	<tr><td class=alert_pink>Send to Front Desk - PINK BORDER</td></tr>
	</table></td></tr></table>";
	
	return $output;
}

# Ads a search 'bar' for the coach to add a gymnast to their class list.
function printclasslists_add_search_bar_for_coach($day, $bcat, $coach, $gender,  $js_trial_data_list_array, $js_data_list_array) {

// function not working yet, decided not to give coaches the ability to add gymnasts to their class list
// instead gymnast must be sent back to the front desk (Ethel) to move/add the gymnast

	  $search_data = printclasslists_get_students_per_class_js_format ($js_data_list_array, $gender);
  
  $trial_data = printclasslists_get_students_per_class_js_format ($js_trial_data_list_array, $gender);
  
  $output .= '
  <script>
  $( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;
          if ( item.category != currentCategory ) {
            ul.append( "<li class=\'ui-autocomplete-category\'>" + item.category + "</li>" );
            currentCategory = item.category;
          }
          li = that._renderItemData( ul, item );
          if ( item.category ) {
            li.attr( "aria-label", item.category + " : " + item.label );
            li.attr( "id", item.userid);
          }
        });
      }
    });
    var data = '.$search_data.'
    var data_trial = '.$trial_data.' 
 
    $( "#search" ).catcomplete({
      delay: 0,
      source: data, 
      select: function( event, ui ) {
            $("#search_id").val(ui.item.userid);
            
          }
    });
    
    $( "#search_trialist" ).catcomplete({
      delay: 0,
      source: data_trial,
      select: function( event, ui ) {
            $("#search_trialist_id").val(ui.item.userid);
            
          }
    });
  } );
  </script> ';
  
  $output .= '
  <script>
$(document).ready(function(){
   

    $("#btn1").click(function(){
    
    	if ( $.isNumeric($("#search_id").val()) ) {
    		gymnastname = $(\'#search\').val();
        	$("#scratch_area_list").append("<li id=catchup_"+$( "#search_id" ).val()+" class=\'ui-state-default notrial catchup ui-sortable-handle \'>" + gymnastname + "</li>");
        	$( "#search" ).val ("");
        	$( "#search_id" ).val ("");
        }else {
        	alert ("Please check that a gymnast has been selected from the drop down list (while typing)");
        }
    });
    
    $("#btn2").click(function(){
    	if ( $.isNumeric($("#search_trialist_id").val()) ) {
    		gymnastname = $(\'#search_trialist\').val();
        	$("#scratch_area_list").append("<li id=trialist_"+ $( "#search_trialist_id" ).val() + " class=\'ui-state-default notrial trial ui-sortable-handle \'>" + gymnastname + "</li>");
        	$( "#search_trialist" ).val ("");
        	$( "#search_trialist_id" ).val ("");
        } else {
        	alert ("Please check that a gymnast has been selected from the drop down list (while typing)");
        }
    });
});
</script>
  ';
  
  return $output;


}

function printclasslists_get_javascript_gymnasts_all_badges ($boys_or_girls, $attendanceprogress, $is_GYM_BADGE = false) {


if ($is_GYM_BADGE) {
	$output = '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".connectedSortable" ).sortable({
      connectWith: ".connectedSortable",
    update: function (event, ui) {
        var data = $(this).sortable(\'serialize\') + "&day_cat[]=" + ($(this).attr(\'id\')) + "&date_monday[]='.$attendanceprogress['date'][0].'";
		//alert (data);
        // POST to server using $.post or $.ajax
        $.ajax({
            data: data,
            type: \'POST\',
            url: "/weekly_gymnasts/'.arg(1).'/'.arg(2).'/save"
        });
    }
    }).disableSelection();
  } );
  </script>';
  
  }else {
  	$output = '<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".connectedSortable").sortable({
      connectWith: ".connectedSortable",
    update: function (event, ui) {
        var data = $(this).sortable(\'serialize\') + "&day_cat[]=" + ($(this).attr(\'id\')) + "&date_monday[]='.$attendanceprogress['date'][0].'";
		//alert (data);
        // POST to server using $.post or $.ajax
        $.ajax({
            data: data,
            type: \'POST\',
            url: "/weekly_gymnasts/'.arg(1).'/'.arg(2).'/save"
        });
    }
    }).disableSelection();
  } );
  </script>';
  }
  
  return $output;
}

#check if gymnast for the class & day is on gymnast_week_schedule 
#check if any additional gymnasts need to be added at the bottom
function weekly_gymnasts_all_badges($class){
    
    $class = arg(1);
    $week_year = explode ('-', arg(2) );
    $weekno = $week_year [0];
    $year = $week_year [1];
    global $base_url;
    $attendanceprogress['class'] = $class;    
    $attendanceprogress['date'] = getStartAndEndDate($weekno, $year);
    
    $gender = arg (3);
    
    if ($class == 'GYM-Badge 1' OR $class == 'GYM-Badge 2') {
    	$is_GYM_BADGE = true;
    	$is_SKIL_BADGE = false;
     	if ($gender == 'Boys') {
    		$boys_or_girls = 'Boys';
    		$gender_formal = 'Male';
    		$gender_short = 'M';
    		$cat_arr = array ('Group 1', 'Group 2', 'Group 3', 'Group 4', 'Group 5', 'Group 6', 'Group 7', 'Group 8');
    	}else {
    		$boys_or_girls = 'Girls';
    		$gender_formal = 'Female';
    		$gender_short = 'F';
    		$cat_arr =  array ('Group 1', 'Group 2', 'Group 3', 'Group 4', 'Group 5', 'Group 6', 'Group 7', 'Group 8');
    	}
    }elseif ($class == 'FUN-Badge 0' OR $class == 'FUN-Badge 1' OR $class == 'FUN-Badge 2') {
    	$is_GYM_BADGE = false;
    	$is_SKIL_BADGE = false;
    	$boys_or_girls = 'All';
    	$gender_formal = 'All';
    	$gender_short = 'A';
    	$cat_arr = array ('All');
    }elseif ($class == 'SKIL-Badge') {
    	$is_GYM_BADGE = false;
    	$is_SKIL_BADGE = true;
    	$boys_or_girls = 'All';
    	$gender_formal = 'All';
    	$gender_short = 'A';
    	//$cat_arr = array ('All');
    	
    	// For Skill Badge, gymnasts are not arranged according to groups but according to coaches, make the category an array of al the user id's for coaches, then we can separate the list according to coaches
    	$query = 'SELECT u.uid, u.name ' .
       'FROM {users} AS u ' .
       'JOIN {users_roles} AS ur ' .
       'ON ur.uid = u.uid ' .       
       'WHERE ur.rid = 14 ORDER BY u.name ASC' ;
    
    	$res = db_query($query);
        $data_name = array();
        $counter = 1;
        while($temp_coach = db_fetch_object($res)) {
        	$cat_arr [] = $temp_coach->uid;
        } 
        
       // print_r ($cat_array);
    	
    	
    }
    
    /*print "<pre>";
    print_r ($attendanceprogress);
    print "</pre>";*/
    
    /* $fulldayFormat = date("dS F Y",strtotime($report_date));*/
    drupal_set_title("Weekly Class List: $gender " . $class . " (Week ".$attendanceprogress['date'][0].")");
	$badtxt = $class; 
	if ($class=='GYM-Badge 1') {
			//$badtxt = 'GYM-Badge 1 & TID-Badge 1';
			$badtxt = 'GYM-Badge 1';
    }
	
	if ($class=='GYM-Badge 2') {
		//$badtxt = 'GYM-Badge 2 & TID-Badge 2';
		$badtxt = 'GYM-Badge 2';
	}
    
    if ($class=='TID') {
		$badtxt = 'TID';
	}
	
	if ($class=='SKIL-Badge') {
		$badtxt = 'SKIL-Badge';
    }
    
    $key = printclasslists_extract_role_id($class);
    
    $roleid2 = FALSE;
	if ($class=='GYM-Badge 1') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 1');
    }
	if ($class=='GYM-Badge 2') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 2');
    }
	if ($class=='SKIL-Badge') {
		$roleid2 = printclasslists_extract_role_id('Elite');
    }
    
    # fetch all the gymnasts who are in this class
    
    $day = 'monday';
    
    $arr_students = printclasslists_return_users(null, $key, $roleid2, 'all', &$break, $class, $date);
    
    // Get all gymnasts from: table gymnast_week_schedule which tracks gymnasts who have: moved, doing a catch up
    
    #check if gymnast for the class & day is on gymnast_week_schedule 
    
    $week_schedule_array = printclasslists_return_gymnast_week_schedule ($class, $weekno, $year, $gender_short, $remove_arr, $is_GYM_BADGE);
    
    #check if any additional gymnasts need to be added at the bottom
    
   // $day_array = printclasslists_return_students_per_day_per_group ($arr_students); 
    
    /*print "<pre>";
    print_r ($arr_students);
    print "</pre>";*/
    
    # Loop through the days of the week and print the table
    
    $day_arr = array ('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
	
	$trialist_ids_arr = array ();
	
	foreach ($arr_students as $arr) {
	
		if ( ($is_GYM_BADGE AND $arr ['gender'] == $gender_formal ) OR !($is_GYM_BADGE) ) {
		
				/*print "<pre>";
		print_r ($arr);
		print "</pre>";*/
		
			foreach ($day_arr as $day) {
				foreach ($cat_arr as $bcat) {
					$style = "";
					
					if ( $arr [$day] && ( ( ($arr ['category'] == $bcat OR !$is_GYM_BADGE) && !$is_SKIL_BADGE ) OR ($arr ['coachid'] == $bcat && $is_SKIL_BADGE) ) ) {
						// gymnast allocated to a day and group/category eg Boys A
						
						//print "day: $day <br />";
						//print "bcat: $bcat <br />";
						
						if ($arr ['user_multi_role'] == 'Trial') {
							$style = 'trial';
							
							if ($is_SKIL_BADGE) {
								$coach = get_user_first_last ($bcat);
								
								$js_trial_data_list_array [$day] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "'.ucfirst($day).': '.$coach.'" , userid: "'.$arr['uid'].'"},';
								
							}else {
								$js_trial_data_list_array [$day] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "'.ucfirst($day).': '.$bcat.'" , userid: "'.$arr['uid'].'"},';
							}
							
						}else {
							$style = 'notrial';
							
							if ($is_SKIL_BADGE) {
								$coach = get_user_first_last ($bcat);
								$js_data_list_array [$day] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "'.ucfirst($day).': '.$coach.'" , userid: "'.$arr['uid'].'"},';
							}else {
								$js_data_list_array [$day] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "'.ucfirst($day).': '.$bcat.'" , userid: "'.$arr['uid'].'"},';
							}
						}
					
						// Check if gymnast is in the remove_arr, whereby the gymnast has been moved to another day so that we should not 
						$add = printclasslists_check_if_in_remove_arr ($remove_arr, $day, $arr, $bcat, $is_GYM_BADGE);
									 
						if ($add) {
							$gymnast_key = $day."999".$style;
							if ($is_SKIL_BADGE) {
								// arrange according to coach
								$gymnast_list_array [$day] [$bcat] .= "<li class='ui-state-default $style day-colour-$day' id='".$gymnast_key."_".$arr ['uid']."'><a href='/user/".$arr ['uid']."/edit' target=_blank>".$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value']."</a></li>";
							} else {
								$gymnast_list_array [$day] [$bcat] .= "<li class='ui-state-default $style day-colour-$day' id='".$gymnast_key."_".$arr ['uid']."'><a href='/user/".$arr ['uid']."/edit' target=_blank>".$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value']."</a></li>";
							}
						}
						
					}elseif ($arr ['user_multi_role'] == 'Trial' && $arr ['category'] == $bcat && !$arr ['monday'] && !$arr ['tuesday'] && !$arr ['wednesday'] && !$arr ['thursday'] && !$arr ['friday'] && !$arr ['saturday']) {
						// Trialist has not been allocated to a day
						
						if (array_search ($arr ['uid'] , $trialist_ids_arr, true) === FALSE) {
							// check to see if the trialist has already been added to $js_trial_data_list_array
							array_push ($trialist_ids_arr, $arr ['uid']);
							
							if ($is_SKIL_BADGE) {
								$coach = get_user_first_last ($bcat);
								
								$js_trial_data_list_array ['unknown'] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "No Day Allocated: '.$coach.'" , userid: "'.$arr['uid'].'"},';
								
							}else {
								$js_trial_data_list_array ['unknown'] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "No Day Allocated: '.$bcat.'" , userid: "'.$arr['uid'].'"},';
							}
						}
						
						
						
					}elseif ($arr ['user_multi_role'] == 'Trial' && $arr ['category'] == 0) {
						// Trialist has not been allocated to a group
						
						if  ( (array_search ($arr ['uid'] , $trialist_ids_arr, true) === FALSE) && !$is_SKIL_BADGE )  {
							// check to see if the trialist has already been added to $js_trial_data_list_array
							$day_allocated = "";
							if ($arr ['monday']) {
								$day_allocated .= "Monday, ";
							}

							if ($arr ['tuesday']) {
								$day_allocated .= "Tuesday, ";
							}
							
							if ($arr ['wednesday']) {
								$day_allocated .= "Wednesday, ";
							}
							
							if ($arr ['thursday']) {
								$day_allocated .= "Thursday, ";
							}
							
							if ($arr ['friday']) {
								$day_allocated .= "Friday, ";
							}
							
							if ($arr ['saturday']) {
								$day_allocated .= "Saturday, ";
							}
							
							array_push ($trialist_ids_arr, $arr ['uid']);
							$js_trial_data_list_array ['unknown'] [$bcat] .= '{ label: "'.$arr['profile_values_profile_last_name_value']." ".$arr['profile_values_profile_first_name_value'].'", category: "No Group Allocated: '.$day_allocated.'" , userid: "'.$arr['uid'].'"},';
						}
					}
				}
			}
		}
	}

	/*print '<pre>';
	print_r ($gymnast_list_array);
	print '</pre>';*/

	// Add any gymnasts to the end of the $gymnast_list_array who have moved 
	if (is_array ($week_schedule_array) ) {
		foreach ($week_schedule_array as $u ) {

			
			$user_load = user_load($u['userid']);

            $coachid = get_gymcoach_uid( $u['userid'] );
			
			if ($coachid) {
			}else {
				$coachid = 'nocoach';
			}
			
			/*print '<pre>';
			print_r ($user_load);
			print '</pre>';*/
			
			if ($u['trial']) {
				$style = 'trial';
			}else {
				$style = 'notrial';
			}
			
			if ($u['moved']) {
				
				$gymnast_key = $u['day_moved_from']."999".$style;
				$day_of_the_week = $u['day_of_the_week'];
				$group = $u['group'];
				
				if ($is_SKIL_BADGE) {
					$gymnast_list_array [$day_of_the_week] [$group] .= "<li class='ui-state-default $style day-colour-".$u['day_moved_from']."' id='".$gymnast_key."_".$u['userid']."'><a href='/user/".$u['userid']."/edit' target=_blank>".strtoupper($user_load->profile_last_name)." ".$user_load->profile_first_name."</a></li>";
				}else {
					$gymnast_list_array [$day_of_the_week] [$group] .= "<li class='ui-state-default $style day-colour-".$u['day_moved_from']."' id='".$gymnast_key."_".$u['userid']."'><a href='/user/".$u['userid']."/edit' target=_blank>".strtoupper($user_load->profile_last_name)." ".$user_load->profile_first_name."</a></li>";
				}	
				
			}elseif ($u['catch_up']) {
				
				$gymnast_key = 'catchup';
				$style = 'notrial catchup';
				$day_of_the_week = $u['day_of_the_week'];
				$group = $u['group'];
				
				if ($is_SKIL_BADGE) {
					$gymnast_list_array [$day_of_the_week] [$group] .= "<li class='ui-state-default $style' id='".$gymnast_key."_".$u['userid']."'><a href='/user/".$u['userid']."/edit' target=_blank>".strtoupper($user_load->profile_last_name)." ".$user_load->profile_first_name."</a></li>";
				}else {
					$gymnast_list_array [$day_of_the_week] [$group] .= "<li class='ui-state-default $style' id='".$gymnast_key."_".$u['userid']."'><a href='/user/".$u['userid']."/edit' target=_blank>".strtoupper($user_load->profile_last_name)." ".$user_load->profile_first_name."</a></li>";
				}	
			}
			
			// load the user
			
		}
	}

	/*print "<pre>";
	print_r ($gymnast_list_array);
	print "</pre>";*/
	
	$output .= printclasslists_get_javascript_gymnasts_all_badges ($boys_or_girls, $attendanceprogress, $is_GYM_BADGE);
  
  
  $search_data = printclasslists_get_students_per_class_js_format ($js_data_list_array, $gender, $is_GYM_BADGE, $is_SKIL_BADGE);
  
  $trial_data = printclasslists_get_students_per_class_js_format ($js_trial_data_list_array, $gender, $is_GYM_BADGE, $is_SKIL_BADGE);
  
  $output .= '
  <script>
  $( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;
          if ( item.category != currentCategory ) {
            ul.append( "<li class=\'ui-autocomplete-category\'>" + item.category + "</li>" );
            currentCategory = item.category;
          }
          li = that._renderItemData( ul, item );
          if ( item.category ) {
            li.attr( "aria-label", item.category + " : " + item.label );
            li.attr( "id", item.userid);
          }
        });
      }
    });
    var data = '.$search_data.'
    var data_trial = '.$trial_data.' 
 
    $( "#search" ).catcomplete({
      delay: 0,
      source: data, 
      select: function( event, ui ) {
            $("#search_id").val(ui.item.userid);
            
          }
    });
    
    $( "#search_trialist" ).catcomplete({
      delay: 0,
      source: data_trial,
      select: function( event, ui ) {
            $("#search_trialist_id").val(ui.item.userid);
            
          }
    });
  } );
  </script> ';
  
  $output .= '
  <script>
$(document).ready(function(){
   

    $("#btn1").click(function(){
    
    	if ( $.isNumeric($("#search_id").val()) ) {
    		gymnastname = $(\'#search\').val();
        	$("#scratch_area_list").append("<li id=catchup_"+$( "#search_id" ).val()+" class=\'ui-state-default notrial catchup ui-sortable-handle \'>" + gymnastname + "</li>");
        	$( "#search" ).val ("");
        	$( "#search_id" ).val ("");
        }else {
        	alert ("Please check that a gymnast has been selected from the drop down list (while typing)");
        }
    });
    
    $("#btn2").click(function(){
    	if ( $.isNumeric($("#search_trialist_id").val()) ) {
    		gymnastname = $(\'#search_trialist\').val();
        	$("#scratch_area_list").append("<li id=trialist_"+ $( "#search_trialist_id" ).val() + " class=\'ui-state-default notrial trial ui-sortable-handle \'>" + gymnastname + "</li>");
        	$( "#search_trialist" ).val ("");
        	$( "#search_trialist_id" ).val ("");
        } else {
        	alert ("Please check that a gymnast has been selected from the drop down list (while typing)");
        }
    });
});
</script>
  ';
    
    $output .= "<table class=outer_table>";
    $output .= "<tr><td class=table_scratch_area valign=top>";
    $output .= "<b>Add/Delete Area: </b>";
    $output .= "<ul id='scratch_area_list' class='connectedSortable'></ul>"; // this is where we store any names that need to be added or have been dragged off.
    $output .= '<input id="search" type=text><br /><input id="search_id" type=hidden><button id="btn1" class=week_view_button>Add Gymnast</button><br /><input id="search_trialist"><input id="search_trialist_id" type=hidden><br /><button id="btn2" class=week_view_button>Add Trialist</button>';
    $output .= "<div class=div_class_menu><b>Class Menu</b>";
    $output .= drupal_get_form('printclasslists_getdateselectforweek', arg(1), $gender );
    $output .= "<ul class='class_menu'>";
    $output .= "<li class='spacer_top'><a href='/weekly_gymnasts/FUN-Badge%200/".arg(2)."/All'>FUN-Badge 0</a></li>";
    $output .= "<li><a href='/weekly_gymnasts/FUN-Badge%201/".arg(2)."/All'>FUN-Badge 1</a></li>";
    $output .= "<li><a href='/weekly_gymnasts/FUN-Badge%202/".arg(2)."/All'>FUN-Badge 2</a></li>";
    $output .= "<li class='spacer_top'><a href='/weekly_gymnasts/GYM-Badge%201/".arg(2)."/Boys'>GYM-Badge 1: Boys</a></li>";
    $output .= "<li><a href='/weekly_gymnasts/GYM-Badge%201/".arg(2)."/Girls'>GYM-Badge 1: Girls</a></li>";
    $output .= "<li class='spacer_top'><a href='/weekly_gymnasts/GYM-Badge%202/".arg(2)."/Boys'>GYM-Badge 2: Boys</a></li>";
    $output .= "<li><a href='/weekly_gymnasts/GYM-Badge%202/".arg(2)."/Girls'>GYM-Badge 2: Girls</a></li>";
    $output .= "<li class='spacer_top'><a href='/weekly_gymnasts/SKIL-Badge/".arg(2)."'>SKIL-Badge</a></li>";
    /*$output .= "<li class='spacer_top'><a href='#'>TID: Boys</a></li>";
    $output .= "<li><a href='#'>TID: Girls</a></li>";
    $output .= "<li class='spacer_top'><a href='#'>SKIL-Badge: Boys</a></li>";
    $output .= "<li><a href='#'>SKIL-Badge: Girls</a></li>";*/
    $output .= "</ul></div>";
    $output .= "</td>";
    $output .= "<td valign=top class=weekly-view-td>";
	$output .= "<table class='weekly-view-table'>";
	$output .= "<tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr>";
	$counter = 0;
	foreach ($cat_arr as $bcat) {
		if ($counter % 2 == 0) {
                        $class = 'even';
                } else {
                        $class = 'odd';
                }
		$output .= "<tr class=$class>";
		foreach ($day_arr as $day) {
		
			
				$output .= "<td valign=top width=17%>";
				
				if ($is_GYM_BADGE) {
					$coach = get_coach_allocated_to_group ($weekno, $bcat, arg(1) );
				
					if ($coach->coach_id) {
						$coach = $coach->coach_name;
					}else {
						$coach = "Coach Not Allocated";
					}
				} elseif ($is_SKIL_BADGE) {
					// $bcat = coach id
					//print $bcat."<br />";
					$coach = get_user_first_last ($bcat);
					//print "$coach<br />";
				} else {
					$coach = "";				
				}
				
				/*if ($is_SKIL_BADGE) {
					foreach ($gymnast_list_array[$day][$bcat] as $key=>$g ) {
					
						$coach = get_gymcoach ($key);
						
						$output .= printclasslists_print_students_per_day_per_category ($gymnast_list_array, $day, $bcat, $coach, $is_GYM_BADGE, $is_SKIL_BADGE, $key);
					}
				}else {*/
					$output .= printclasslists_print_students_per_day_per_category ($gymnast_list_array, $day, $bcat, $coach, $is_GYM_BADGE, $is_SKIL_BADGE);
				//}
				
				$output .= "</td>";
		}
		$output .= "</tr>";
		$counter ++;
	}
	$output .= "</table>"; // weekly-view-table
	
	 $output .= "<table class=key>";
    $output .= "<tr><th colspan=1>KEY</th></tr>";
    $output .= "<tr><td class='trial'>Trial - YELLOW BACKGROUND</td></tr>";
    $output .= "<tr><td class=catchup>Catch Up - GRAY BACKGROUND</td></tr>";
    //$output .= "<tr><td class=moved nowrap>Moved to Different Day</td><td class='moved'>RED</td></tr>";
    $output .= "</table>";
	
	$output .= "</td>";
	$output .= "</tr>";
	$output .= "</table>"; // outer_table 
	
   
    
   
    
    return $output;
    
}


/* Ajax call */
function weekly_gymnasts_save () {

	/* format of $_POST variable for moving a gymnast from one date to another */

	/* wednesday999notrial[]=1704&wednesday999notrial[]=1204&wednesday999notrial[]=1488&wednesday999notrial[]=1378&day_cat[]=sortable_wednesday_BoysA&date_monday[]=2016-08-08
	*/
	
	/* thursday999notrial[]=675&thursday999notrial[]=1204&wednesday999notrial[]=951&thursday999notrial[]=1090&thursday999notrial[]=1310&day_cat[]=sortable_thursday_BoysA&date_monday[]=2016-08-08
	
	
	OR if its in the UL.scratch_area_list
	
	&day_cat[]=scratch_area_list&date_monday[]=2016-08-08
	
	OR 
	
	tuesday999notrial[]=1440&tuesday999notrial[]=1009&tuesday999notrial[]=930&catchup[]=1082&tuesday999notrial[]=1377&tuesday999notrial[]=1386&tuesday999notrial[]=1439&day_cat[]=sortable_tuesday_GirlsA&date_monday[]=2016-08-08
	
	OR
	
	// need to handle this one with 'trialist'
		friday999trial[]=2123&friday999trial[]=2124&friday999trial[]=2141&monday999notrial[]=1635&trialist[]=2049&day_cat[]=sortable_friday_All&date_monday[]=2017-01-16
		
	// and this one:
	
	tuesday999trial[]=2049&tuesday999notrial[]=1635&catchup[]=1635&day_cat[]=sortable_tuesday_All&date_monday[]=2017-01-16
	
	jamesj
	
	*/
	
	# arg (1) is the class
    # arg (2) is the week and year eg 32-2016

    # find out date for today
    $class = arg(1);
    $week_year = explode ('-', arg(2) );
    $weekno = $week_year [0];
    $year = $week_year [1];
    $attendanceprogress['class'] = $class;    
    $attendanceprogress['date'] = getStartAndEndDate($weekno, $year);
    
    $day_cat = $_POST ['day_cat'][0];
    
    if (false) {

    }else {
    
    	if ($day_cat == 'scratch_area_list') {
    		$day_name = 'scratch_area_list';
    	}else {
    		$day_cat = explode ("_", $day_cat);
    		$day_name = $day_cat [1];
    	}
    
    	switch ($day_name) {
    	case 'monday':
    		$date = strtotime ($attendanceprogress['date'][0]);
    		$date_str = $attendanceprogress['date'][0];
    		break;
    	case 'tuesday':
    		$date = strtotime ($attendanceprogress['date'][1]);
    		$date_str = $attendanceprogress['date'][1];
    		break;
    	case 'wednesday':
    		$date = strtotime ($attendanceprogress['date'][2]);
    		$date_str = $attendanceprogress['date'][2];
    		break;
    	case 'thursday':
    		$date = strtotime ($attendanceprogress['date'][3]);
    		$date_str = $attendanceprogress['date'][3];
    		break;
    	case 'friday':
    		$date = strtotime ($attendanceprogress['date'][4]);
    		$date_str = $attendanceprogress['date'][4];
    		break;
    	case 'saturday':
    		$date = strtotime ($attendanceprogress['date'][5]);
    		$date_str = $attendanceprogress['date'][5];
    		break;
    	case 'scratch_area_list': // dragged to scratch area, we use Monday's date
    		$date = strtotime ($attendanceprogress['date'][0]); // use monday's date
    		$date_str = $attendanceprogress['date'][0];
    		break;
    	}
    
    	# $date is linux timestamp for the date that needs to be saved
    
    	if ($day_cat == 'scratch_area_list') {
    		$group_name = 'scratch_area_list';
    		if (arg(1) == 'Boys') {
    			$gender = "M";
    		}else {
    			$gender = "F";
    		}
    	}else {
    	    $group_name = $day_cat [2];
    	}
    	
    	switch ($group_name) {
    		case 'Group1':
    			$group_name = "Group 1";

    			break;
    		case 'Group 2':
    			$group_name = "Group 2";

    			break;
    		case 'Group 3':
    			$group_name = "Group 3";

    			break;
    		case 'Group 4':
    			$group_name = "Group 4";

    			break;
    		case 'Group 5':
    			$group_name = "Group 5";

    			break;
    		case 'Group 6':
    			$group_name = "Group 6";

    			break;
    		case 'Group 7':
    			$group_name = "Group 7";

    			break;
    		case 'Group 8':
    			$group_name = "Group 8";

    			break;

    	} 
    
    	watchdog("printclasslists", "group_name: $group_name , date: $date , date_str: $date_str, day_name: $day_name");
    
    	/* $fulldayFormat = date("dS F Y",strtotime($report_date));*/
    
    	/* drupal_set_title("Weekly Class List: " . $class . " (Week ".$attendanceprogress['date'][0]." )");*/
    
    	# delete all the entries for this day from gymnast_week_schedule
    	if ($day_cat == 'scratch_area_list') {
    	
    	}else {
    		$query = "DELETE from gymnast_week_schedule WHERE `date` = $date AND `group` = '$group_name' AND `class` = '$class'";
    		db_query ($query);
    		watchdog("printclasslists", "query: $query");
    	}
    
    	
    
    	
    
    	# loop through array of user ID's and add gymnast IDs to gymnast_week_schedule
    
    	$week_array = array ("monday", "tuesday", "wednesday", "thursday", "friday", "saturday");
    
    	$trial_array = array ("notrial", "trial");
    	$delete_query = array ();
    	$insert_query = array ();
    
    	foreach ($week_array as $w) {
    		foreach ($trial_array as $t) {
    			$query = "";
    			#format: wednesday999notrial
    			$arr_name = $w."999".$t;
    			watchdog("printclasslists", '$arr_name: '. $arr_name);
    			if (is_array ($_POST[$arr_name])) {
    			
    				if ($t == 'trial') {
    					$trial = 1;
    				}else {
    					$trial = 0;
    				}
    		
    				foreach ($_POST[$arr_name] as $userid) {
    				watchdog("printclasslists", '$userid: '. $userid);
    					$catch_up = 0; // gymnasts who are catching up on a lesson are below
    			
    					if ($w != $day_name) {
    						// gymnast is moving from one day to another
    						$moved = 1;
    						$day_moved_from = $w;
    					}else {
    						$moved = 0;
    						$day_moved_from = "";
    					}
    				
    			
    					if ($day_cat == 'scratch_area_list') {
    						watchdog("printclasslists", 'in scratch_area: '. $day_cat);
    						// we can't delete all gymnasts from the gymnast_week_schedule table as the scratch pad doesn't load all the gymnasts, it starts off 'empty' on a page load
    						/*$del_query = "DELETE from gymnast_week_schedule WHERE `weekly_start_date` = '".$attendanceprogress['date'][0]."' AND `day_of_the_week` = 'scratch_area_list' AND `group` = 'scratch_area_list' AND `class` = '$class' AND `gender` = '$gender'";*/
    						
    						//$delete_query [] = $del_query;
    						
    						// check to see if their is already any entry for this gymnast in gymnast_week_schedule
    						
    						$query = "SELECT * from gymnast_week_schedule WHERE `weekly_start_date` = '".$attendanceprogress['date'][0]."' AND `day_of_the_week` = 'scratch_area_list' AND `group` = 'scratch_area_list' AND `class` = '$class' AND `userid` = $userid";
    						 watchdog("printclasslists", 'query: '. $query);
    						 $count_nodes = 0;
    						 
    						 $result = db_query($query);
    						 
    						 while($row = db_fetch_array ($result) ) {
    						 	$count_nodes++;
    						 }
    						  
    						 watchdog("printclasslists", 'count_nodes: '. $count_nodes);
    						 
    						if (!($count_nodes)) {

								watchdog("printclasslists", '1 - in the insert coditions: '. $count_nodes);
    							$temp_query = "INSERT INTO gymnast_week_schedule (`userid`, `weekly_start_date`, `day_of_the_week`, `date`, `day_moved_from`, `trial`, `moved`, `catch_up`, `class`, `group`, `week`, `year`)
VALUES ($userid, '".$attendanceprogress['date'][0]."', 'scratch_area_list', $date, '$day_moved_from', $trial, $moved, $catch_up, '$class', 'scratch_area_list', $weekno, $year); ";
    							watchdog("printclasslists", '2 - in the insert coditions: '. $count_nodes);
    							$insert_query [] = $temp_query;
    							watchdog("printclasslists", '3 - in the insert coditions: '. $count_nodes);
								watchdog("printclasslists", 'insert query: '. $insert_query);
							} else {
								watchdog("printclasslists", 'insert query not executed as row exits: '. $query);
							}
    						
    					}else {
    						$query = "INSERT INTO gymnast_week_schedule (`userid`, `weekly_start_date`, `day_of_the_week`, `date`, `day_moved_from`, `trial`, `moved`, `catch_up`, `class`, `group`, `week`, `year`)
VALUES ($userid, '".$attendanceprogress['date'][0]."', '$day_name', $date, '$day_moved_from', $trial, $moved, $catch_up, '$class', '$group_name', $weekno, $year); ";

							db_query ($query);
    						watchdog("printclasslists", 'query: '. $query. 'day moved from '.$w);
    					}
    			
    				}
    			}
    		
    		}
    	}
    	
    	// add in any catchups to the Database
    	if (is_array ($_POST['catchup'])) {
    		foreach ($_POST['catchup'] as $userid) {
    			// Gymnast is catching up on a lesson
    			$catch_up = 1;
    	
    			// A gymnast who is 'catching up' on a class is different to a gymnast who has moved from one day to another
    			$moved = 0;
    			$day_moved_from = "";
    		
    			// A person catching up can't be a trialist
    		
    			$trial = 0;
    		
    			$query = "INSERT INTO gymnast_week_schedule (`userid`, `weekly_start_date`, `day_of_the_week`, `date`, `day_moved_from`, `trial`, `moved`, `catch_up`, `class`, `group`, `week`, `year`)
VALUES ($userid, '".$attendanceprogress['date'][0]."', '$day_name', $date, '$day_moved_from', $trial, $moved, $catch_up, '$class', '$group_name', $weekno, $year); ";

				db_query ($query);
    			watchdog("printclasslists", 'query: '. $query);
    		
    		}
    	}
    	
    	foreach ($delete_query as $query) {
    		db_query ($query);
    		watchdog("printclasslists", 'scratch area query: '. $query);
    	}
    	
    	foreach ($insert_query as $query) {
    		db_query ($query);
    		watchdog("printclasslists", 'scratch area query: '. $query);
    	}

		$variables = implode(",", $_POST);
	} // end  if ($day_cat == 'scratch_area_list') 
	/*foreach ($_POST['userid'] as $u) {
		$v .= $u;
	}*/

	//watchdog("printclasslists", 'ajax called var: '. $variables);
	//return "hello";
}

function printclasslists_capture() {
    
	$dt = arg(2);
	$current = date("Y-m-d");
	if (arg(2) != '' && $dt < $current) {
			drupal_set_message(t("No class found!!!"));
			drupal_goto("printclasslists");
	}
	else if (!is_numeric(arg(1)) && arg(2) != '') {   
        $class = arg(1);                       
        //$report_date = "03rd September 2013";        
        $report_date = arg(2);        
		
        $temp = explode("?print",$report_date);
		$report_date = $temp[0];
		$date = date("Y-m-d", strtotime($report_date));
        $fullday = date("l", strtotime($report_date));        
        //echo $_REQUEST['print']; exit;
		$day = strtolower($fullday);/*
        /*$dt = new DateTime(arg(2));
        $fullday = $dt->format('l');        
        $day = strtolower($fullday);*/        
        //$day = date('l', strtotime($report_date)); // note: first arg to date() is lower-case L        
        //echo date_format(date_create(arg(2)), 'l');        
        //$quarter = "3rd quarter";     
        $fulldayFormat = date("dS F Y",strtotime($report_date));
        //drupal_set_title("Print Progress Report: " . $class . " ($fullday, $report_date - " . $quarter . ")");
		$badtxt = $class; 
		if ($class=='GYM-Badge 1') {
			//$badtxt = 'GYM-Badge 1 & TID-Badge 1';
			$badtxt = 'GYM-Badge 1';
        }
		if ($class=='GYM-Badge 2') {
			//$badtxt = 'GYM-Badge 2 & TID-Badge 2';
			$badtxt = 'GYM-Badge 2';
        }
        if ($class=='TID') {
			$badtxt = 'TID';
        }
		if ($class=='SKIL-Badge') {
			$badtxt = 'SKIL-Badge & ELITE';
        }
        drupal_set_title("Print Class Report: " . $badtxt . " ($fullday, $fulldayFormat".")");
        $return = "";
        $roles = user_roles(false);
        foreach ($roles as $key => $value) {       
            if ($value == $class) {                        
                $roleid = $key;
                $rolevalue = $value;
                break;
           }
        }        
		
		$roleid2 = FALSE;
		if ($class=='GYM-Badge 1') {
			$roleid2 = printclasslists_extract_role_id('TID-Badge 1');
        }
		if ($class=='GYM-Badge 2') {
			$roleid2 = printclasslists_extract_role_id('TID-Badge 2');
        }
		if ($class=='SKIL-Badge') {
			$roleid2 = printclasslists_extract_role_id('Elite');
        }
//                $class = 'GYM-Badge 1';
		$arr_students = printclasslists_return_users(null, $key, $roleid2, $day, &$break, $class, $date);
//                print '<pre>';print_r($arr_students);print '</pre>';
                $attendanceprogress['class'] = $class;
		$attendanceprogress['date'] = $report_date;
		$return .= '<table border="0" width="100%"><tr><td width="50%">';
//                $coachid = return_group_fun($groupname, $coachnews);
//                print_r($coachid);260216
		$formout = drupal_get_form('printclasslists_capture_form', $attendanceprogress, $arr_students, $break, $pnode, $cnode, $roleid);    
		$return .= $formout;
		$return .= '</td><td width="50%" style=" padding-right:10px; vertical-align:top; padding-left:10px">';
			$return .= printclasslists_coach_table($attendanceprogress, $arr_students, $break, $pnode, $cnode, $roleid);   
			//preg_match_all('/type="checkbox"/isU',$formout,$all);
			preg_match_all('/value="1"\s+checked="checked"\s+\s+class/isU',$formout,$found);
			if ($found[0]) {
				$rowdata = get_current_row_data($class, $report_date);
				$max = '?';
				if ($rowdata['field_maxgymst_value'] && $rowdata['field_maxcoches_value']) {
				  $max = $rowdata['field_maxgymst_value'] * $rowdata['field_maxcoches_value'];
				}
				$return .= '<p><strong>Currently '.count($found[0]).' out of '.$max.' gymnasts allocated to the class for '.$fullday.', '. $fulldayFormat.'</strong></p>';
			}
			
			$return .= "<p>The table below is ordered to list students in this class who normally train on a <b>$day</b> first.</p><p>Beneath the red line in the table are the remaining students in the class.</p>";
			
		$return .= '</td></tr></table>';

    } else {

        global $user;
        $arg = array("FUN-Badge 0","FUN-Badge 1", "FUN-Badge 2","TID","GYM-Badge 1", "GYM-Badge 2", "SKIL-Badge");
        $cnt = '';
		global $base_url;
        foreach ($arg as $kk => $a) {
            $ashort = str_replace(" ", "", $a);
            $return .= "<div class='captureprogressouter'>";
            if ($a=="TID")
			$atxt = "TID";
			else if ($a=="GYM-Badge 1")
			$atxt = "GYM-Badge 1";
			else if ($a=="GYM-Badge 2")
			$atxt = "GYM-Badge 2";
			else if ($a=="SKIL-Badge")
			$atxt = "SKIL-Badge & Elite";
			else
			$atxt = $a;
            $return .= "<div class='captureprogresstitle'><h3><a id=\"classtitles-$ashort\" href=\"javascript:toggle('toggleText-menu-$ashort');\">$atxt</a></h3></div>";
            $return .= "<div id=\"toggleText-menu-$ashort\" style=\"display: none\" class='toggleouter tk".$kk."'>";
			
			$return .= '<table border="0" class="printlistss"><tr><td width="52%">';
			$return .= "class: ".$a;
                        $return .= drupal_get_form('printclasslists_getdatelistform', $a);
			$return .= drupal_get_form('printclasslists_getdateselectforweek', $a);
                        
			if ($a=="FUN-Badge 0" ||$a=="FUN-Badge 1" || $a=="FUN-Badge 2" || 1) { 
			$return .= '<form action="'.$base_url.'/search-users" method="get">
						<table>
						<tr>
						<th style="border-bottom:none">Search for Gymnast</th>
						</tr>
						<tr>
						<td>
							<input type="text" size="30" name="keys">&nbsp;<input type="submit" value="Search">
						</td>
						</tr></table></form>
						';
			$return .= '</td><td width="48%">';
		
			if ($_POST['week0-hidden']!="") {
				if (strstr($a, "FUN")) {
					$return .= get_current_week_date_fun($a, $_POST['week0-hidden']);
				} else {
				$return .= get_current_week_dates($a, $_POST['week0-hidden']);
				}
			} else if ($_POST['week1-hidden']!="") {
				if (strstr($a, "FUN")) {
					$return .= get_current_week_date_fun($a, $_POST['week0-hidden']);
				} else {
					$return .= get_current_week_dates($a, $_POST['week1-hidden']);
				}
			} else if ($_POST['week2-hidden']!="") {
				$return .= get_current_week_dates($a, $_POST['week2-hidden']);
			}  else if ($_POST['week3-hidden']!="") {
				$return .= get_current_week_dates($a, $_POST['week3-hidden']);
			} else if ($_POST['week4-hidden']!="") {
				$return .= get_current_week_dates($a, $_POST['week4-hidden']);
			} else {
				if (strstr($a, "FUN")) {
					$return .= get_current_week_date_fun($a);
				} else if($a == 'TID' || $a == 'GYM-Badge 1' || $a == 'GYM-Badge 2'){					
                                        $return .= get_current_week_dates_tid($a);
                                }else{
                                    $return .= get_current_week_dates($a);
                                }
			} 

			$return .= '<form action="'.$base_url.'/printclasslists" method="post">
			<table>
			<tr>
			<th style="border-bottom:none">
			<input type="hidden" name="togglepost" id="togglepost" value="'.$ashort.'">
			<br>Select Week</th>
			</tr>
			<tr>
			<td>
				<input type="hidden" name="week'.$kk.'-hidden" id="week'.$kk.'-hidden" >
				<input type="text" name="week'.$kk.'" id="week'.$kk.'" value="'.$_POST['week'.$kk.'-hidden'].'">&nbsp;<input type="submit" value="View week overview">
			</td>
			</tr></table></form>
			';
			
			}

			$return .= '</td></tr></table>'; 
			
            $return .= "</div>"; //$cnt;
            $return .= "</div>";
            $cnt++;
        }

			if ($_POST['togglepost']) {

				drupal_add_js("jQuery(document).ready(function () {
											toggle('toggleText-menu-".$_POST['togglepost']."');
						});", "inline");

			}

		   drupal_add_js("jQuery(document).ready(function () {                                        
                    jQuery('#dt').datepicker({
                        //dateFormat: 'd MM yy', 
                        dateFormat: 'yy-mm-dd',
						minDate: 0
                    });
					jQuery('#week0, #week1, #week2, #week3, #week4').datepicker({
                        //dateFormat: 'd MM yy', 
                        dateFormat: 'yy-mm-dd',
						minDate: 0,
						onClose: function() {   
							$('#'+this.id + '-hidden').val($(this).val());
							//alert($('#'+this.id + '-hidden').val());
							//alert($('#week-hidden').val());
						}
                    });

		});", "inline");

		$clist = get_coach_list();
		
		$return .= '<br><h2 class="pagetitle">Print Class List per Coach</h2>';
		$return .= '<p><form name="f1" action="" method="post"><input type="hidden" name="coachprint" value="coach">
						<p><table><tr>
							<td><select name="coachid"><option value="">Select Coach</option>'.$clist.'</select></td>
							<td>&nbsp;</td>
							<td><input name="dt" id="dt"></td>
							<td><input type="submit" value="Print"></td>
						</tr></table></p></form></p>';

    }

	$output = '';
	global $base_url;
	if ($_REQUEST['print'] == 1) {
		$xclass = str_replace(" ", "$", $class);	
		$output .= "<script> window.open('".$base_url."/printmembers/".$xclass."/".$report_date."/xtheme','Print','height=700,width=800,scrollbars=1,resizable=1'); </script>";
	}
	if ($_POST['coachid']!="" && $_POST['coachprint']=="coach") {
		$output .= "<script> window.open('".$base_url."/printcoaches/".$_POST['coachid']."/".$_POST['dt']."/xtheme','Print','height=700,width=800,scrollbars=1,resizable=1'); </script>";
	}
	$output .= '<div class=printclasslist>' . $return . '</div>';
    return $output;
}

//******************* Function start for TID table for page printlist dated: 22nd Feb 2016**************************//

function get_current_week_dates_tid($badge, $reportdate=NULL) {
		global $base_url; 
                if(($badge) == 'GYM-Badge 1'){
                    $tid_role = 8;
                }elseif(($badge) == 'GYM-Badge 2'){
                    $tid_role = 9;
                }elseif(($badge) == 'TID'){
                    $tid_role = 24;
                }

		if (!$reportdate) {
			$reportdate = date('Y-m-d');
		}
		$lastmonday = date('Y-m-d', strtotime('last monday', strtotime($reportdate)));
		$starttime = strtotime($lastmonday);
		$endtime = strtotime($lastmonday) + (60*60*24*6);
		$return = '<table class="gym-tim-badge" style="margin-left:5px; border:1px solid #000; border-collapse:collapse; width:90%"><tr><th 
		style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">Coach</th>';
		$temp = $starttime;
		while ($temp <= $endtime) {
			$oldcheck = strtotime(date('Y-m-d',$temp));
			$newcheck = strtotime(date('Y-m-d', time()));
			if ( $oldcheck < $newcheck ) {
			$return .= '<th style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">
			'.date('D', $temp).'&nbsp;'.date('d/m', $temp).'</th>';
		
			} else {
			$return .= '<th style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">
			<a href="'.$base_url.'/printclasslists/'.$badge.'/'.date('Y-m-d', $temp).'" style="color:white">'.date('D', $temp).'&nbsp;'.date('d/m', $temp).'</a></th>';
			}
			$temp = $temp + (60*60*24);
		}
		$return .= "</tr>";
                $return .= "<tr>";
                //Coach search start //
                $query = 'SELECT u.uid, u.name ' .
                'FROM {users} AS u ' .
                'JOIN {users_roles} AS ur ' .
                'ON ur.uid = u.uid ' .       
                'WHERE ur.rid = 14 ' .
                'ORDER BY u.uid';
                $roleres = db_query($query);
                $coachnew = array();
                while($rolerow = db_fetch_array($roleres)){                        
                    $coachnew[] = array($rolerow['uid'], $rolerow['name']);                        
                }
                
                $today = date('y-m-d');
                $groupquery = 'SELECT * ' .
                        'FROM {coachallocatedtobadge} AS c ' .
                        'WHERE c.coach_id != 0 AND c.badge_role = '.$tid_role.' ' .
                        'ORDER BY c.coach_id';
                $groupres = db_query($groupquery);                
                
                $groupname = array();
                while($grouprow = db_fetch_array($groupres)){   
                    $groupname[] = array($grouprow['group_name'], $grouprow['coach_name'], $grouprow['coach_id'], $grouprow['week_date'], $grouprow['badge_role']);
                }
                                
                foreach($coachnew as $coachnews){ 
                    $return . "<tr>";
                    $return .= "<td style='border:1px solid #000; border-collapse:collapse; 
                            text-align:center; background-color:#808080' align='center'><b>".ucfirst($coachnews[1])."</b></td>";
                    $return .= "<td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>";                    
                    $return .= return_group_fun($groupname, $coachnews);
                    $return .= "</td>";
                    $return .= "<td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>";                    
                    $return .= return_group_fun($groupname, $coachnews);
                    $return .= "</td>";
                    $return .= "<td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>";                    
                    $return .= return_group_fun($groupname, $coachnews);
                    $return .= "</td>";
                    $return .= "<td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>";                    
                    $return .= return_group_fun($groupname, $coachnews);
                    $return .= "</td>";
                    $return .= "<td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>";                    
                    $return .= return_group_fun($groupname, $coachnews);
                    $return .= "</td>";
                    $return .= "<td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>";                    
                    $return .= return_group_fun($groupname, $coachnews);
                    $return .= "</td>";
                    $return .= "<td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'></td>";
                    $return .= "</tr>";
                }                                
		
                //Coach search end //
		$temp = $starttime;
		$tcoach = array();
		while ($temp <= $endtime) {
			$coach = getcoach_week($badge, date('Y-m-d', $temp));
			if ($coach) {
				foreach ($coach as $n => $c) {
					foreach ($c as $dat => $cou) {
						$tcoach[$n][$dat] = $cou;	
					}
				}
			}
			$temp = $temp + (60*60*24);
		}
		
		if ($tcoach) {
		    foreach ($tcoach as $cname => $dt) {	
				$temp = $starttime;
				$return .= "<tr><td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>".$cname."</td>";
				while ($temp <= $endtime) {
					$rowdata = get_current_row_data($badge, date('Y-m-d', $temp));
					$max = '?';
					if ($rowdata['field_maxgymst_value'] && $rowdata['field_maxcoches_value']) {
						$max = $rowdata['field_maxgymst_value'] * $rowdata['field_maxcoches_value'];
					}		
					$fullday = date("l", $temp);        
					$day = strtolower($fullday);
					//$gynast = get_current_gymnast_data($badge, $day, date('Y-m-d', $temp));
					$gynast = '?';
					if ($dt[date('Y-m-d', $temp)]) {
						$gynast = $dt[date('Y-m-d', $temp)];
					}
					$return .= '<td style="padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center">'.$gynast.'/'.$max.'</td>';
					$temp = $temp + (60*60*24);
				}
				$return .= "</tr>";
		   }
		}

		$reurn .= '</table>';
		return $return;

}

function return_group_fun($groupname, $coachnews){   
    $path = drupal_get_path('module', 'printclasslists');    
    drupal_add_js($path . '/js/printclasslists.js');
    
    global $base_url;
    $coachid = $coachnews[0];
    $flag = false;
    $return = '';
    $node = node_load('3499');
    
    $maxgym = $node->field_maxgymst[0]['value'];
    $coachno = $node->field_maxcoches[0]['value'];
    foreach($groupname as $groupnames){  
        $rolename = user_role_load_by_id($groupnames[4]);
        $groupdate = $groupnames[3];
        $badgeid = $groupnames[4];
        $thegroupnames = $groupnames[0];
        $badgetitle = 'TID';
        $weekno_ofgroupdate = get_week_num($groupdate);
        $todaydate = date('Y-m-d');
        $weekno_oftoday = get_week_num($todaydate);
        if($coachid == $groupnames[2] && $weekno_ofgroupdate == $weekno_oftoday){            
            $gname = '<a href="'.$base_url.'/printclasslists/'.$rolename.'/'.date('Y-m-d').'/'.$coachid.'/'.$thegroupnames.'" target="_blank">'.$groupnames[0].'</a>: ';
            $return .= $gname. ' ' .$maxgym.'/'.$coachno.'<br>';
            $flag = true;            
        }
    }
    if($flag == false){ $return .= 'No Group'; $gname = 'No Group'; }
    return $return;
}

//function printclasslists_TID($coachid, $badgetitle){
//    $output = 'Hello $coachid'.$coachid.'$badgeid '. $badgeid;
//    return $output;
//}

//******************* Function close for TID table for page printlist **************************//


function get_current_week_dates($badge, $reportdate=NULL) {
		global $base_url;
		if (!$reportdate) {
			$reportdate = date('Y-m-d');
		}
		$lastmonday = date('Y-m-d', strtotime('last monday', strtotime($reportdate)));
		$starttime = strtotime($lastmonday);
		$endtime = strtotime($lastmonday) + (60*60*24*6);
		$return = '<table class="gym-tim-badge" style="margin-left:5px; border:1px solid #000; border-collapse:collapse; width:90%"><tr><th 
		style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">Coach</th>';
		$temp = $starttime;
		while ($temp <= $endtime) {
			$oldcheck = strtotime(date('Y-m-d',$temp));
			$newcheck = strtotime(date('Y-m-d', time()));
			if ( $oldcheck < $newcheck ) {
			$return .= '<th style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">
			'.date('D', $temp).'&nbsp;'.date('d/m', $temp).'</th>';
		
			} else {
			$return .= '<th style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">
			<a href="'.$base_url.'/printclasslists/'.$badge.'/'.date('Y-m-d', $temp).'" style="color:white">'.date('D', $temp).'&nbsp;'.date('d/m', $temp).'</a></th>';
			}
			$temp = $temp + (60*60*24);
		}
		$return .= "</tr>";
		
		$temp = $starttime;
		$tcoach = array();
		while ($temp <= $endtime) {
			$coach = getcoach_week($badge, date('Y-m-d', $temp));
			if ($coach) {
				foreach ($coach as $n => $c) {
					foreach ($c as $dat => $cou) {
						$tcoach[$n][$dat] = $cou;	
					}
				}
			}
			$temp = $temp + (60*60*24);
		}
		
		if ($tcoach) {
		    foreach ($tcoach as $cname => $dt) {	
				$temp = $starttime;
				$return .= "<tr><td style='padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center'>".$cname."</td>";
				while ($temp <= $endtime) {
					$rowdata = get_current_row_data($badge, date('Y-m-d', $temp));
					$max = '?';
					if ($rowdata['field_maxgymst_value'] && $rowdata['field_maxcoches_value']) {
						$max = $rowdata['field_maxgymst_value'] * $rowdata['field_maxcoches_value'];
					}		
					$fullday = date("l", $temp);        
					$day = strtolower($fullday);
					//$gynast = get_current_gymnast_data($badge, $day, date('Y-m-d', $temp));
					$gynast = '?';
					if ($dt[date('Y-m-d', $temp)]) {
						$gynast = $dt[date('Y-m-d', $temp)];
					}
					$return .= '<td style="padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center">'.$gynast.'/'.$max.'</td>';
					$temp = $temp + (60*60*24);
				}
				$return .= "</tr>";
		   }
		}

		$reurn .= '</table>';
		return $return;

}


function get_current_week_date_fun($badge, $reportdate=NULL) {
		global $base_url;
		if (!$reportdate) {
			$reportdate = date('Y-m-d');
		}
		$lastmonday = date('Y-m-d', strtotime('last monday', strtotime($reportdate)));
		$starttime = strtotime($lastmonday);
		$endtime = strtotime($lastmonday) + (60*60*24*6);
		$return = '<table class="funbadge11" style="margin-left:5px; border:1px solid #000; border-collapse:collapse; width:90%"><tr>';
		$temp = $starttime;
		while ($temp <= $endtime) {
			$oldcheck = strtotime(date('Y-m-d',$temp));
			$newcheck = strtotime(date('Y-m-d', time()));
			if ( $oldcheck < $newcheck ) {
			$return .= '<th style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">
			'.date('D', $temp).'&nbsp;'.date('d/m', $temp).'</th>';
		
			} else {
			$return .= '<th style="border:1px solid #000; border-collapse:collapse; 
				text-align:center; background-color:#808080" align="center">
			<a href="'.$base_url.'/printclasslists/'.$badge.'/'.date('Y-m-d', $temp).'" style="color:white">'.date('D', $temp).'&nbsp;'.date('d/m', $temp).'</a></th>';
			}
			$temp = $temp + (60*60*24);
		}
		$return .= "</tr>";
		$temp = $starttime;
		while ($temp <= $endtime) {
			$rowdata = get_current_row_data($badge, date('Y-m-d', $temp));
			$max = '?';
			if ($rowdata['field_maxgymst_value'] && $rowdata['field_maxcoches_value']) {
				$max = $rowdata['field_maxgymst_value'] * $rowdata['field_maxcoches_value'];
			}		
			$fullday = date("l", $temp);        
			$day = strtolower($fullday);
			$gynast = get_current_gymnast_data($badge, $day, date('Y-m-d', $temp));
			//echo '<pre>';
			//print_r($gynast);
			//exit;
			$return .= '<td style="padding:2px; border:1px solid #000; border-collapse:collapse; text-align:center">'.$gynast.'/'.$max.'</td>';
			$temp = $temp + (60*60*24);
		}
		$return .= "</tr>";
		$reurn .= '</table>';
		return $return;

}

function getcoach_week($class, $reportdate) {

	$query = "select b.*
		from gym_badge_save b where badclass='".$class."' and baddate='".$reportdate."'";
		$badresult = db_query($query);
	$carray = array();
	while ($badrow = db_fetch_array($badresult)) {
		$u = user_load($badrow['baduser']);
		profile_load_profile($u);
		if ($u->field_gymcoach[0]['uid']) {
			$coach = user_load($u->field_gymcoach[0]['uid']);
			if ($coach) {
				$name = $coach->profile_last_name." ".$coach->profile_first_name;
				if (!isset($carray[$name][$reportdate])) {
					$carray[$name][$reportdate] = 1;
				} else {
					$carray[$name][$reportdate]++;
				}
			} //coach found
		} //gymcoach 
	} // end of while

	if (count($carray)) {
		return $carray;
	}

	$roles = user_roles(false);
	foreach ($roles as $key => $value) {       
            if ($value == $class) {                        
                $roleid = $key;
                $rolevalue = $value;
                break;
           }
    }    
	$fullday = date("l", strtotime($reportdate));
	$day = strtolower($fullday);
	$roleid2 = FALSE;
	/*if ($class=='GYM-Badge 1') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 1');
	}
	if ($class=='GYM-Badge 2') {
		$roleid2 = printclasslists_extract_role_id('TID-Badge 2');
	}*/
	if ($class=='SKIL-Badge') {
		$roleid2 = printclasslists_extract_role_id('Elite');
	}
	//$arr_students = printclasslists_return_users($roleid, $roleid2, $day, &$break);

	if ($arr_students) {
		foreach ($arr_students as $astudent) {
				if ($astudent['coach']) {
					if (!isset($carray[$astudent['coach']][$reportdate])) {
						$carray[$astudent['coach']][$reportdate] = 1;
					} else {
						$carray[$astudent['coach']][$reportdate]++;
					}
				}
		}
	} // end of arr students array

	return $carray;
}

function get_current_row_data($badge, $reportdate) {
		$reportdate = $reportdate . " 23:00:00";
//		$query = "select * from content_type_class where UNIX_TIMESTAMP(field_c_dates_value) <= ".
//				strtotime($reportdate)." and ".strtotime($reportdate)." <= UNIX_TIMESTAMP(field_c_dates_value2) and field_c_type_value='".$badge."' order by nid desc limit 0,1";
                $query = "select * from content_type_class where ".strtotime($reportdate)." <= UNIX_TIMESTAMP(field_c_dates_value2) and field_c_type_value='".$badge."' order by nid desc limit 0,1 ";
		$row = db_fetch_array(db_query($query));                
		return $row;
}

function get_current_gymnast_data($badge, $day, $reportdate) {

	$query = "select count(*)
	from gym_badge_save b where badclass='".$badge."' and baddate='".$reportdate."'";
	$count = db_result(db_query($query));
	if ($count > 0) {
		return $count;
	}
	$roles = user_roles(false);
	foreach ($roles as $key => $value) {       
		if ($value == $badge) {                        
			$role_id1 = $key;
			$rolevalue = $value;
			break;
	   }
	}      

	$role_id2 = FALSE;
	/*if ($badge=='GYM-Badge 1') {
		$role_id2 = printclasslists_extract_role_id('TID-Badge 1');
	}
	if ($badge=='GYM-Badge 2') {
		$role_id2 = printclasslists_extract_role_id('TID-Badge 2');
	}*/
	if ($badge=='SKIL-Badge') {
		$role_id2 = printclasslists_extract_role_id('Elite');
	}

    // setup arr
    $arr = array();
    // cater for 1 or 2 roles
    if ($role_id1 && $role_id2) {
        $role_txt = "users_roles.rid = " . $role_id1 . " OR users_roles.rid = " . $role_id2;
    } else {
        $role_txt = "users_roles.rid = " . $role_id1;
    }
	
	if (!$role_id1) {
		return 0;
	}
	$count = 0;
    if ($day != 'all') {
        switch ($day) {
            case 'monday':
                $day_id = 33;
                break;
            case 'tuesday':
                $day_id = 34;
                break;
            case 'wednesday':
                $day_id = 35;
                break;
            case 'thursday':
                $day_id = 36;
                break;
            case 'friday':
                $day_id = 37;
                break;
            case 'saturday':
                $day_id = 38;
                break;
            case 'sunday':
                $day_id = 39;
                break;
            case 'unknown':
                $day_id = 40;
                break;
        }

        $query = "SELECT profile_values_profile_first_name.value AS";
        $query .= " profile_values_profile_first_name_value,profile_values_profile_last_name.value AS ";

        $query .= "profile_values_profile_last_name_value, profile_values_profile_gymnast_gender.value AS gender, users.uid AS uid ,
		users_roles.rid AS rid FROM users users INNER JOIN users_roles users_roles ";

        $query .= "ON users.uid = users_roles.uid LEFT JOIN profile_values profile_values_profile_{$day} ON users.uid = ";
        $query .= "profile_values_profile_{$day}.uid AND profile_values_profile_{$day}.fid='$day_id' ";

        $query .= "LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = ";
        $query .= "profile_values_profile_first_name.uid AND profile_values_profile_first_name.fid ='2' ";

        $query .= "LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = ";
        $query .= "profile_values_profile_last_name.uid AND profile_values_profile_last_name.fid = '1' ";

        $query .= "LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid AND profile_values_profile_gymnast_gender.fid = '17' ";

        $query .= "WHERE ($role_txt) AND (profile_values_profile_{$day}.value <> 0) ORDER BY profile_values_profile_last_name_value ASC,profile_values_profile_first_name_value ASC;";
        
        $result = db_query($query);
		$count = 0;
        if ($result) {
			while ($row = db_fetch_object($result)) {	
				$count++;
			}
		} //end of count
    }
    return $count;

}


function printclasslists_return_users_skilz_by_progress_and_group ($progress_id, $group) {
	#Fetch all the gymnasts in this group for this class for this date
	
	$query = "SELECT profile_values_profile_first_name.value AS profile_values_profile_first_name_value, profile_values_profile_last_name.value AS profile_values_profile_last_name_value, profile_values_profile_gymnast_gender.value AS gender, profile_values_profile_class_category.value AS category, users.uid AS uid , users_roles.rid AS rid FROM users users INNER JOIN gymnast_group GG on users.uid = GG.uid 
INNER JOIN users_roles users_roles ON users.uid = users_roles.uid 
LEFT JOIN profile_values profile_values_profile_class_category ON users.uid = profile_values_profile_class_category.uid AND profile_values_profile_class_category.fid = '43' LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = profile_values_profile_first_name.uid AND profile_values_profile_first_name.fid ='2' LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = profile_values_profile_last_name.uid AND profile_values_profile_last_name.fid = '1' LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid AND profile_values_profile_gymnast_gender.fid = '17'
WHERE GG.progressid='$progress_id' AND GG.GroupNumber = '$group' ORDER BY profile_values_profile_last_name_value ASC,profile_values_profile_first_name_value ASC";
	
	$result = db_query($query);
    $counter = 1;
    printclasslists_build_user_arr($arr, $result, $counter, '');
    return $arr;
	
}

// ------------ for path /addmoregymnast  -----------//
function printclasslists_return_users($groupa, $role_id1, $role_id2, $day, &$break, $class, $reportdate) {

global $user;

    // setup arr
//    print_r($reportdate);
    $arr = array();    
    // cater for 1 or 2 roles
    if ($role_id1 && $role_id2) {
        $role_txt = "users_roles.rid = " . $role_id1 . " OR users_roles.rid = " . $role_id2;
    } else {
        $role_txt = "users_roles.rid = " . $role_id1;
    }        
    
    if ($day != 'all') {
        switch ($day) {
            case 'monday':
                $day_id = 33;
                break;
            case 'tuesday':
                $day_id = 34;
                break;
            case 'wednesday':
                $day_id = 35;
                break;
            case 'thursday':
                $day_id = 36;
                break;
            case 'friday':
                $day_id = 37;
                break;
            case 'saturday':
                $day_id = 38;
                break;
            case 'sunday':
                $day_id = 39;
                break;
            case 'unknown':
                $day_id = 40;
                break;
        }        
                               
        if(arg(4) != ''){
            $group = "profile_values_profile_{$day}.value <> 0 AND profile_values_profile_class_category.value = '".arg(4)."'";
        }else{
            $group = "profile_values_profile_{$day}.value <> 0";
        }

        //echo 'ALSO HERE';
        $query = "SELECT profile_values_profile_first_name.value AS profile_values_profile_first_name_value,profile_values_profile_last_name.value 
AS profile_values_profile_last_name_value, profile_values_profile_gymnast_gender.value AS gender, 
profile_values_profile_class_category.value AS category, 
users.uid AS uid ,
 users_roles.rid AS rid 
 FROM users users 
 INNER JOIN users_roles users_roles ON users.uid = users_roles.uid 
 LEFT JOIN profile_values profile_values_profile_{$day} ON users.uid = profile_values_profile_{$day}.uid AND profile_values_profile_{$day}.fid='$day_id' 
 LEFT JOIN profile_values profile_values_profile_class_category ON users.uid = profile_values_profile_class_category.uid AND profile_values_profile_class_category.fid = '43' 
 LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = profile_values_profile_first_name.uid AND profile_values_profile_first_name.fid ='2' 
 LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = profile_values_profile_last_name.uid AND profile_values_profile_last_name.fid = '1' 
 LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid AND profile_values_profile_gymnast_gender.fid = '17' 
 WHERE ($role_txt) AND $group ORDER BY profile_values_profile_last_name_value ASC,profile_values_profile_first_name_value ASC;";


//if ($user->uid == 1) {

//	print("Query 1: <br />".$query);
	
	
//}
        $result = db_query($query);
        $counter = 1;
        printclasslists_build_user_arr($arr, $result, $counter, $groupname);
        $break = $counter;
    }

        switch ($day) {
            case 'monday':
                $orderby = 'monday DESC';
                break;
            case 'tuesday':
                $orderby = 'tuesday DESC';
                break;
            case 'wednesday':
                $orderby = 'wednesday DESC';
                break;            
            case 'thursday':
                $orderby = 'thursday DESC';
                break;
            case 'friday':
                $orderby = 'friday DESC';
                break;
            case 'saturday':
                $orderby = 'saturday DESC';
                break;
            case 'sunday':
                $orderby = 'sunday DESC';
                break;
            default:
                $orderby = "profile_values_profile_last_name_value ASC,profile_values_profile_first_name_value ASC";
        }


        $query = "SELECT profile_values_profile_first_name.value AS profile_values_profile_first_name_value, 
profile_values_profile_last_name.value AS profile_values_profile_last_name_value, 
profile_values_profile_gymnast_gender.value AS gender, 
profile_values_profile_class_category.value AS category, 
profile_values_profile_monday.value AS monday, 
profile_values_profile_tuesday.value AS tuesday, 
profile_values_profile_wednesday.value AS wednesday, 
profile_values_profile_thursday.value thursday,
profile_values_profile_friday.value AS friday, 
profile_values_profile_saturday.value AS saturday, 
users.uid AS uid, users_roles.rid AS rid
FROM users users
INNER JOIN users_roles users_roles ON users.uid = users_roles.uid
LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = profile_values_profile_first_name.uid
AND profile_values_profile_first_name.fid =  '2'
LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = profile_values_profile_last_name.uid
AND profile_values_profile_last_name.fid =  '1'
LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid
AND profile_values_profile_gymnast_gender.fid =  '17' 
LEFT JOIN profile_values profile_values_profile_class_category ON users.uid = profile_values_profile_class_category.uid AND profile_values_profile_class_category.fid =  '43' 
LEFT JOIN profile_values profile_values_profile_monday ON users.uid = profile_values_profile_monday.uid AND profile_values_profile_monday.fid =  '33'
LEFT JOIN profile_values profile_values_profile_tuesday ON users.uid = profile_values_profile_tuesday.uid AND profile_values_profile_tuesday.fid =  '34'
LEFT JOIN profile_values profile_values_profile_wednesday ON users.uid = profile_values_profile_wednesday.uid AND profile_values_profile_wednesday.fid =  '35'
LEFT JOIN profile_values profile_values_profile_thursday ON users.uid = profile_values_profile_thursday.uid AND profile_values_profile_thursday.fid =  '36'
LEFT JOIN profile_values profile_values_profile_friday ON users.uid = profile_values_profile_friday.uid AND profile_values_profile_friday.fid =  '37'
LEFT JOIN profile_values profile_values_profile_saturday ON users.uid = profile_values_profile_saturday.uid AND profile_values_profile_saturday.fid =  '38' 

WHERE users_roles.rid = '$role_id1' ORDER BY $orderby";

//    if ($user->uid == 1) {
///LEFT JOIN coachallocatedtobadge AS coach ON coach.coach_id = users.uid
//print("Query 2: <br />".$query);
	
	
//}
    
    $result = db_query($query);
    $counter = 1;
    printclasslists_build_user_arr($arr, $result, $counter, $groupnames);
    return $arr;
}

function printclasslists_extract_role_id($role) {
    $query = "SELECT rid from {role} WHERE name = '%s'";
    $result = db_query($query, array($role));
    $row = db_fetch_object($result);
    if ($row) {
        return $row->rid;
    } else {
        return false;
    }
}

function printclasslists_extract_role_name($role) {
    $query = "SELECT name from {role} WHERE rid = '%s'";
    $result = db_query($query, array($role));
    $row = db_fetch_object($result);
    if ($row) {
        return $row->name;
    } else {
        return false;
    }
}

function progresstracker_extract_gymnast_name($uid) {
    $query = "SELECT name from {users} WHERE uid = '%s'";
    $result = db_query($query, array($uid));
    $row = db_fetch_object($result);
    if ($row) {
        return $row->name;
    } else {
        return false;
    }
}

//***************** Changes on 22 March 2016 open ***************//
//
//function printclasslists_build_user_arr(&$arr, $result, &$counter, $groupnames) {
//    while ($row = db_fetch_object($result)) {        
////        print '<pre>';print_r($row);print '</pre>';
////        $selecteddate = arg(2);
////        print date(l,$selecteddate);
//            
////        $selecteddate = arg(2);
////        $sepparator = '-';
////        $parts = explode($sepparator, $selecteddate);
////        $dayForDate = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
////        print $dayForDate;
//        
//        $user_load = user_load($row->uid);
////        print '<pre>';print_r($user_load);print '</pre>';
//        $group = $user_load->profile_class_category;        
//        $roles = $user_load->roles;
////        print '<pre>';print($roles[32]);print '</pre>';
//        if($roles[32] != ''){
//            $user_multi_role = $roles[32];
//        }else{
//            $user_multi_role = '';
//        }
////        $user_multi_role = array();
////        foreach($roles as $key => $user_roles){
//////            print '<pre>';print($user_roles);print '</pre>';
////            $user_multi_role = $key.', ';
////        }        
////        print '<pre>';print_r($groupnames);print '</pre>';
////        foreach($groupname as $groupnames){
////            print '<br>'.'$group ';print_r($group);print '--------';
////        print '$group ';print_r($groupnames);
//        if($groupnames == $group){
//		if (
//					$row->rid == printclasslists_extract_role_id('TID-Badge 1')
//					|| $row->rid  == printclasslists_extract_role_id('TID-Badge 2')
//					|| $row->rid  == printclasslists_extract_role_id('Elite')
//			)
//			{
//				$lastname = strtoupper($row->profile_values_profile_last_name_value);
//				$firstname = strtoupper($row->profile_values_profile_first_name_value);
//			} else {
//				$lastname = $row->profile_values_profile_last_name_value;
//				$firstname = $row->profile_values_profile_first_name_value;
//		}
//        $arr[$row->uid]['profile_values_profile_last_name_value'] = $lastname;
//        $arr[$row->uid]['profile_values_profile_first_name_value'] = $firstname;
//        $arr[$row->uid]['gender'] = $row->gender;
//		$arr[$row->uid]['role'] = $row->rid;
//		$arr[$row->uid]['coach'] = get_gymcoach($row->uid);
//		$arr[$row->uid]['coachid'] = get_gymcoach_uid($row->uid);
//        $arr[$row->uid]['uid'] = $row->uid;
//        $counter++;
//    }elseif($groupnames == ''){
//        if (
//					$row->rid == printclasslists_extract_role_id('TID-Badge 1')
//					|| $row->rid  == printclasslists_extract_role_id('TID-Badge 2')
//					|| $row->rid  == printclasslists_extract_role_id('Elite')
//			)
//			{
//				$lastname = strtoupper($row->profile_values_profile_last_name_value);
//				$firstname = strtoupper($row->profile_values_profile_first_name_value);
//			} else {
//				$lastname = $row->profile_values_profile_last_name_value;
//				$firstname = $row->profile_values_profile_first_name_value;
//		}
//        $arr[$row->uid]['profile_values_profile_last_name_value'] = $lastname;
//        $arr[$row->uid]['profile_values_profile_first_name_value'] = $firstname;
//        $arr[$row->uid]['gender'] = $row->gender;
//        
//        $arr[$row->uid]['role'] = $row->rid;
//        $arr[$row->uid]['coach'] = get_gymcoach($row->uid);
//        $arr[$row->uid]['coachid'] = get_gymcoach_uid($row->uid);
//        $arr[$row->uid]['uid'] = $row->uid;  
//        $arr[$row->uid]['user_multi_role'] = $user_multi_role;
////        print $user_multi_role;
//        $counter++;
//    }
////    }
//    }
//    
//    
//}

function printclasslists_build_user_arr(&$arr, $result, &$counter) {
    while ($row = db_fetch_object($result)) {

        $user_load = user_load($row->uid);
        
        //print_r ($user_load);
        
        $roles = $user_load->roles;
        if($roles[32] != ''){
            $user_multi_role = $roles[32];
        }else{
            $user_multi_role = '';
        }
        
        $lastname = $row->profile_values_profile_last_name_value;
        $firstname = $row->profile_values_profile_first_name_value;

        $arr[$row->uid]['profile_values_profile_last_name_value'] = strtoupper($lastname);
        $arr[$row->uid]['profile_values_profile_first_name_value'] = $firstname;
        $arr[$row->uid]['gender'] = $row->gender;
        $arr[$row->uid]['category'] = $row->category;
        $arr[$row->uid]['role'] = $row->rid;
        $arr[$row->uid]['coach'] = get_gymcoach($row->uid);
        $arr[$row->uid]['coachid'] = get_gymcoach_uid($row->uid);
        $arr[$row->uid]['uid'] = $row->uid;
        $arr[$row->uid]['monday'] = $row->monday;
        $arr[$row->uid]['tuesday'] = $row->tuesday;
        $arr[$row->uid]['wednesday'] = $row->wednesday;
        $arr[$row->uid]['thursday'] = $row->thursday;
        $arr[$row->uid]['friday'] = $row->friday;
        $arr[$row->uid]['saturday'] = $row->saturday;
        $arr[$row->uid]['user_multi_role'] = $user_multi_role;
        $counter++;
    }
}

//***************** Changes on 22 March 2016 close ***************//

function group_build_user_arr(&$arr, $result, &$counter, $coachid, $group_array = array(), $class = "", $day = "") {
//print '<br><b>Coachid:'.$coachid."</b><br />";
    while ($row = db_fetch_object($result)) {

		$ucoach = get_gymcoach_uid($row->uid);
//		print "ucoach: $ucoach <br />";

		$include_gymnast = false;
		
		if ($class == 'SKIL-Badge') { // for skil badge, gymnasts are displayed according to the coach allocated to them
			if ($ucoach == $coachid && $ucoach!="") {
				$include_gymnast=true;
			}
		}else {
			// for GYM and TID, a gymnast is displayed if they are in the correct group for the coach
			// $group_array contains the groups that the coach teaches eg Boys A, Boys B etc
			
			$key = array_search($row->profile_values_profile_class_category, $group_array);
			if ($key === FALSE) {
				$include_gymnast = false;
			}else {
				$include_gymnast = true;
			}
		}
		

		if ($include_gymnast) {
//			print "- in<br />";

			if (
					$row->rid == printclasslists_extract_role_id('TID-Badge 1')
					|| $row->rid  == printclasslists_extract_role_id('TID-Badge 2')
					|| $row->rid  == printclasslists_extract_role_id('Elite')
			)
			{
				$lastname = strtoupper($row->profile_values_profile_last_name_value);
				$firstname = strtoupper($row->profile_values_profile_first_name_value);
			} else {
				$lastname = $row->profile_values_profile_last_name_value;
				$firstname = $row->profile_values_profile_first_name_value;
			}
			$arr[$row->uid]['profile_values_profile_last_name_value'] = $lastname;
			$arr[$row->uid]['profile_values_profile_first_name_value'] = $firstname;
			$arr[$row->uid]['gender'] = $row->gender;
			$arr[$row->uid]['role'] = $row->rid;
			$arr[$row->uid]['group'] = $row->profile_values_profile_class_category;
			$arr[$row->uid]['coach'] = get_gymcoach($row->uid);
			$arr[$row->uid]['coachid'] = get_gymcoach_uid($row->uid);
			$arr[$row->uid]['uid'] = $row->uid;
			$arr[$row->uid]['category'] = 'All';
			$arr[$row->uid][$day] = 1;
			$counter++;
		}
    }
}

//XXX
function group_return_users($group, $role_id1, $role_id2, $day, &$break, $coachid, $class, $date) {
    // setup arr
    $arr = array();
    // cater for 1 or 2 roles
    if ($role_id1 && $role_id2) {
        $role_txt = "users_roles.rid = " . $role_id1 . " OR users_roles.rid = " . $role_id2;
    } else {
        $role_txt = "users_roles.rid = " . $role_id1;
    }

    if ($day != 'all') {
        switch ($day) {
            case 'monday':
                $day_id = 33;
                break;
            case 'tuesday':
                $day_id = 34;
                break;
            case 'wednesday':
                $day_id = 35;
                break;
            case 'thursday':
                $day_id = 36;
                break;
            case 'friday':
                $day_id = 37;
                break;
            case 'saturday':
                $day_id = 38;
                break;
            case 'sunday':
                $day_id = 39;
                break;
            case 'unknown':
                $day_id = 40;
                break;
        }
	    if (isset($class) && $class == 'SKIL-Badge') {
            
            $query = "SELECT profile_values_profile_first_name.value AS";
            $query .= " profile_values_profile_first_name_value,profile_values_profile_last_name.value AS ";

            $query .= "profile_values_profile_last_name_value, profile_values_profile_gymnast_gender.value AS gender, users.uid AS uid,  
            users_roles.rid AS rid FROM users users INNER JOIN users_roles users_roles ";

            $query .= "ON users.uid = users_roles.uid LEFT JOIN profile_values profile_values_profile_{$day} ON users.uid = ";
            $query .= "profile_values_profile_{$day}.uid AND profile_values_profile_{$day}.fid='$day_id' ";

            $query .= "LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = ";
            $query .= "profile_values_profile_first_name.uid AND profile_values_profile_first_name.fid ='2' ";

            $query .= "LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = ";
            $query .= "profile_values_profile_last_name.uid AND profile_values_profile_last_name.fid = '1' ";

            $query .= "LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid AND profile_values_profile_gymnast_gender.fid = '17' ";

            $query .= "WHERE ($role_txt) AND (profile_values_profile_{$day}.value <> 0) ORDER BY profile_values_profile_last_name_value ASC,profile_values_profile_first_name_value ASC;";

        }
        else {
        	// get $gym = 'GYM-Badge 1';
               
                $reportdate = $date;
                
                //print "date: ".$date;
                
                $coachgroup = get_role_tables($gym, $coachid, $reportdate);
                
                // loop through the coach groups and see which groups this coach teaches for role/badge/class
                $counter = 0;
                $coach_has_groups = false;
                
                $group_array = array();
                foreach ($coachgroup as $c_row) {
                	if ($c_row [2] == $role_id1) { // we don't need to check role_id2 as this would be for Elite students.  Elite students are combined with SKIL students and don't have a separate group.
                		$group_array[] = $c_row[1]; // get the Group name eg (Boys A)
                		$counter ++;	
                		$coach_has_groups = true;
                	}
                }
                
                // A coach may be teaching more than one Group eg Boys A and Boys B for GYM-Badge 1
                // build the query
                 
                if ($counter ==1 ) {
                	$group_sql = "profile_values_profile_class_category.value ='".$group_array [0]."'";
                }
                elseif ($counter > 1) {
                	foreach ($group_array as $g) {
                		$group_sql .= "profile_values_profile_class_category.value ='".$g."' OR ";
                	}
                	// trim off the extra AND at the end of $group_sql;
                	$group_sql = substr($group_sql, 0, strlen($group_sql)-3 );
                	$group_sql = "(".$group_sql.")";
                }
                if(isset($group)) {
                    $group_sql .= "profile_values_profile_class_category.value ='".$group."'";
                    echo $group_sql;
                }
                
                                
                if ($coach_has_groups) {
                	$query = "
                		SELECT 
						profile_values_profile_first_name.value AS profile_values_profile_first_name_value,
						profile_values_profile_last_name.value AS profile_values_profile_last_name_value,
						profile_values_profile_class_category.value AS profile_values_profile_class_category,
 						profile_values_profile_gymnast_gender.value AS gender, users.uid AS uid,  
						users_roles.rid AS rid FROM users users INNER JOIN users_roles users_roles 

						ON users.uid = users_roles.uid LEFT JOIN profile_values profile_values_profile_{$day}
						ON users.uid = profile_values_profile_{$day}.uid AND profile_values_profile_{$day}.fid='37'

						LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = 
						profile_values_profile_first_name.uid AND profile_values_profile_first_name.fid ='2'

						LEFT JOIN profile_values profile_values_profile_class_category ON users.uid = 
						profile_values_profile_class_category.uid AND $group_sql 

						LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = 
						profile_values_profile_last_name.uid AND profile_values_profile_last_name.fid = '1' 

						LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid 
						AND profile_values_profile_gymnast_gender.fid = '17'

//XXX
						WHERE ($role_txt) AND (profile_values_profile_{$day}.value <> 0) A ORDER BY profile_values_profile_last_name_value ASC,
						profile_values_profile_first_name_value ASC
                	";
                	
                }else {
                	$coach_name = get_user_first_last($coachid);
                	drupal_set_message ("A group of gymnasts for <b>$class</b> has not been allocated to coach <b>$coach_name</b> for week starting: <b>".$reportdate."</b>. Please contact the website admin to allocate a group of gymnasts eg (Boys A, Boys B etc) to this coach.");
                
                	$coach_has_groups = false;
                }
        	}
        
        $result = db_query($query);
        $counter = 1;
        group_build_user_arr($arr, $result, $counter, $coachid, $group_array, $class, $day);
        $break = $counter;
    }else {
    // get everyone else day = 'all'
    if (isset($class) && $class == 'SKIL-Badge') {
     // FOR SKIL-Badge it should only return a list of gymnasts who train on the current day.
     
    $query = "SELECT profile_values_profile_first_name.value AS profile_values_profile_first_name_value, profile_values_profile_last_name.value AS profile_values_profile_last_name_value, profile_values_profile_gymnast_gender.value AS gender, users.uid AS uid , users_roles.rid AS rid FROM users users  INNER JOIN users_roles users_roles ON users.uid = users_roles.uid LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = profile_values_profile_first_name.uid AND profile_values_profile_first_name.fid = '2' LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = profile_values_profile_last_name.uid AND profile_values_profile_last_name.fid = '1' LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid AND profile_values_profile_gymnast_gender.fid = '17' WHERE ($role_txt) ORDER BY profile_values_profile_last_name_value ASC, profile_values_profile_first_name_value ASC";
       
    }
    else {
                
                if ($coach_has_groups) { // we checked in code above if the coach has been allocated to a group, so only run query if coach has groups.

                	$query = "
                	SELECT 
profile_values_profile_first_name.value AS profile_values_profile_first_name_value, profile_values_profile_last_name.value AS profile_values_profile_last_name_value,
profile_values_profile_class_category.value AS profile_values_profile_class_category, profile_values_profile_gymnast_gender.value AS gender, users.uid AS uid , 
users_roles.rid AS rid FROM users users  INNER JOIN users_roles users_roles 
ON users.uid = users_roles.uid 
LEFT JOIN profile_values profile_values_profile_first_name ON users.uid = profile_values_profile_first_name.uid AND profile_values_profile_first_name.fid = '2' 
LEFT JOIN profile_values profile_values_profile_class_category ON users.uid = 
profile_values_profile_class_category.uid AND $group_sql 
LEFT JOIN profile_values profile_values_profile_last_name ON users.uid = profile_values_profile_last_name.uid AND profile_values_profile_last_name.fid = '1' 
LEFT JOIN profile_values profile_values_profile_gymnast_gender ON users.uid = profile_values_profile_gymnast_gender.uid AND profile_values_profile_gymnast_gender.fid = '17' 
WHERE ($role_txt) ORDER BY profile_values_profile_last_name_value ASC, profile_values_profile_first_name_value ASC
                
                	";
                }
        	}
        } // end else
        	if ($query) {
    $result = db_query($query);
    $counter = 1;
    group_build_user_arr($arr, $result, $counter, $coachid, $group_array, $class, $day);
    }
    return $arr;
}


function printcoach($coachid, $reportdate) {
	
	if ($coachid!="" && $reportdate!="") { 
				
				$coach = user_load($coachid);	
				profile_load_profile($coach);
				//$reportdate = arg(2);
				$date = date("Y-m-d", strtotime($reportdate));
				$fullday = date("l", strtotime($reportdate));        
				//echo $_REQUEST['print']; exit;
				$day = strtolower($fullday);
		
			
			$date = date("Y-m-d", strtotime($reportdate));
			$fullday =  date("l", strtotime($reportdate));    

			$output = '<div align="right" width="95%"><a onclick="callprint()" href="#" id="xpr">Print</a>&nbsp;&nbsp;</div>';
			$output .= '<div align="center" width="100%"><h2 style="font-size:17px">'.$coach->profile_last_name.' '.
				$coach->profile_first_name.' - Attendance Register</h3></div>';
			$output .= '<div align="center" width="100%"><h4>'.date('l', strtotime($reportdate)).', '.date('dS F Y', strtotime($reportdate)).'</h4></div>';
			$output .= '<div align="center" width="100%">&nbsp;</div><br>';
			
			$r = printclasslists_extract_role_id('GYM-Badge 1');
			$r1 = printclasslists_extract_role_id('TID-Badge 1');
			$break = '';
			$pr = printmembers('GYM-Badge 1',$reportdate,$coachid);
                        $gym = 'GYM-Badge 1';
                        $output .= get_role_table($gym, $coachid, $reportdate);
//			if (!$pr) {
//				$r1users = group_return_users($r, $r1, $day, $break, $coachid);
//				if ($r1users) {
//					$output .= get_r_table($r1users,$break,'GYM-Badge 1',$reportdate);
//				}
//			} else {
//				$output .= $pr;
//			}

			$r = printclasslists_extract_role_id('GYM-Badge 2');
			$r1 = printclasslists_extract_role_id('TID-Badge 2');
			$break = '';
			$pr = printmembers('GYM-Badge 2',$reportdate,$coachid);
//			if (!$pr) {
//				$r1users = group_return_users($r, $r1, $day, $break, $coachid);
//				if ($r1users) {
//					$output .= get_r_table($r1users,$break,'GYM-Badge 2',$reportdate);
//				}
//			} else {
//				$output .= $pr;
//			}

			$r = printclasslists_extract_role_id('SKIL-Badge');
			$r1 = printclasslists_extract_role_id('Elite');
			$break = '';
			$pr = printmembers('SKIL-Badge',$reportdate,$coachid);
			if (!$pr) {
				$r1users = group_return_users(null, $r, $r1, $day, $break, $coachid);
				if ($r1users) {
					$output .= get_r_table($r1users,$break,'SKIL-Badge',$reportdate);
				}
			} else {
				$output .= $pr;
			}

			/*$r = printclasslists_extract_role_id('ELITE');
			$break = '';
			$r1users = group_return_users($r, FALSE, $day, $break, $coachid);
			if ($r1users) {
				$output .= get_r_table($r1users,$break,'ELITE',$reportdate);
			}*/
			$output .= "<script> function callprint() { document.getElementById('xpr').style.display='none';window.print();} </script>";

			return $output;
	}
	//exit;
}

function get_role_tables($gym, $coachid, $reportdate){
    $dateforweek = $reportdate;
    //print "reportdate: $reportdate <br />";
    
    $reportdateweek = get_week_num($dateforweek);
    //print "reportdateweek: $reportdateweek <br />";
    
    $coach_name = get_user_first_last($coachid);
    
    $querycoach = 'SELECT * ' .
       'FROM {coachallocatedtobadge} AS coach ' .
       'WHERE coach.coach_id = "'.$coachid.'"';
    $rescoach = db_query($querycoach);
    $coachgroup = array();
    $has_rows = false;
    while($rowcoach = db_fetch_array($rescoach)){        
        $group_name = $rowcoach['group_name'];
           
        $dateforweek = $rowcoach['week_date'];
        $week_dateweek = get_week_num($dateforweek);        
        if($reportdateweek == $week_dateweek){
            $coachgroup[] = array($rowcoach['week_date'],
                              $rowcoach['group_name'],
                              $rowcoach['badge_role'],
                              $rowcoach['coach_name'],
                              $rowcoach['coach_id']);
            $has_rows = true;
 
        }
    }
    
    if (!$has_rows) { // the coach has not been allocated any groups for this week
    	drupal_set_message("A group of gymnasts has not been allocated to coach <b>$coach_name</b> for week starting: <b>".$reportdate."</b>. Please contact the website admin to allocate a group of gymnasts eg (Boys A, Boys B etc) to this coach.");
    }
    
    return $coachgroup;
}    
    
function get_role_table($gym, $coachid, $reportdate){    
    $coachgroup = get_role_tables($gym, $coachid, $reportdate);
    foreach ($coachgroup as $coachgroups){
        $query = 'SELECT u.uid, u.name ' .
            'FROM {users} AS u ' .
            'JOIN {users_roles} AS ur ' .
            'ON ur.uid = u.uid ' .       
            'WHERE ur.rid = "'.$coachgroups[2].'"';
            $res = db_query($query);
            $role_id = $coachgroups[2];
            $role_name = user_role_load_by_id($role_id);
            
            $output .= '<p style="text-align:left; width:75%"><b>'.$role_name. '</b> with group <b>'.$coachgroups[1].'</b></p> '
            . '<table border="1" class="capturetable " align="center" style="width:75%">';
            $output .= "<tr><th>#</th><th>Gymnast Name</th>
                            <th>Gender</th>
                            <th>Class<br>Length<br>(Min)</th>
                            <th>Perform</th>
                            <th>Effort</th>
                            <th width='40%'>Comments</th>
                            </tr>";
            $counter = 1;
            while($row = db_fetch_array($res)){ 
                $u = user_load($row['uid']);
                $group = $u->profile_class_category;
               
                
                if($group == $coachgroups[1]){  
                $pageday = date('l', strtotime($reportdate));
  
                $monday = $u->profile_monday;
                $tuesday = $u->profile_tuesday;
                $wednesday = $u->profile_wednesday;
                $thursday = $u->profile_thursday;
                $friday = $u->profile_friday;
                $saturday = $u->profile_saturday;
                $sunday = $u->profile_sunday;
                
                $day = array();
                if($monday == 1){
                    $day[] = 'Monday';
                    $daycount = 1;
                }
                if($tuesday == 1){     
                    $day[] = 'Tuesday';
                    $daycount = 2;
                }
                if($wednesday == 1){     
                    $day[] = 'Wednesday';
                    $daycount = 3;
                }
                if($thursday == 1){
                    $day[] = 'Thursday';
                    $daycount = 4;
                }
                if($friday == 1){
                    $day[] = 'Friday';
                    $daycount = 5;
                }
                if($saturday == 1){
                    $day[] = 'Saturday';
                    $daycount = 6;
                }
                if($sunday == 1){
                    $day[] = 'Sunday';
                    $daycount = 7;
                }

                foreach($day as $days){
                    if($days == $pageday){
                    $redline = 'redline';
                    $weight = 1;
                }
                else{
                    $redline = 'no-redline';
                    $weight = 0;
                }
             }                
                
//                // ---- date work end ----//                

                $days = implode(', ', $day);
                $name = $u->name;
                $fname = $u->profile_first_name;
                $lname = $u->profile_last_name;
                $class_cat = $u->profile_class_category;           
                $badge = $u->roles[8];   
                $gender = $u->profile_gymnast_gender;
                
                if ($counter % 2 == 0) {
                        $class = 'even';
                } else {
                        $class = 'odd';
                }
                              
              if($weight == 1)
              {    
                $output .= '<tr class="'.$name.' '.$class.'">
                <td>'.$counter++.'</td>
                <td>'.$fname.' '.$lname.'</td>
                <td>'.$gender.'</td>                
                <td>'.' /180'.'</td>
                <td>'.'&nbsp;'.'</td>
                <td>'.'&nbsp;'.'</td><td>&nbsp;</td>
                </tr>';
                
              }               
             }
            }
            
            
            //*************** Without red color data *********************
            
           $query = 'SELECT u.uid, u.name ' .
            'FROM {users} AS u ' .
            'JOIN {users_roles} AS ur ' .
            'ON ur.uid = u.uid ' .       
            'WHERE ur.rid = "'.$coachgroups[2].'"';
            $res = db_query($query);
            $role_id = $coachgroups[2];
            $role_name = user_role_load_by_id($role_id);
            $output .= '<tr class="breakpoints-coll adddd"><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
             while($row = db_fetch_array($res)){ 
                $u = user_load($row['uid']);
                $group = $u->profile_class_category;               
                
                if($group == $coachgroups[1]){ 
                                       
                // ---- date work start ----//  
                    
                $pageday = date('l', strtotime($reportdate));  
                
                $monday = $u->profile_monday;
                $tuesday = $u->profile_tuesday;
                $wednesday = $u->profile_wednesday;
                $thursday = $u->profile_thursday;
                $friday = $u->profile_friday;
                $saturday = $u->profile_saturday;
                $sunday = $u->profile_sunday;
                
                $day = array();
                if($monday == 1){
                    $day[] = 'Monday';
                    $daycount = 1;
                }
                if($tuesday == 1){
                    $day[] = 'Tuesday';
                    $daycount = 2;
                }
                if($wednesday == 1){
                    $day[] = 'Wednesday';
                    $daycount = 3;
                }
                if($thursday == 1){
                    $day[] = 'Thursday';
                    $daycount = 4;
                }
                if($friday == 1){
                    $day[] = 'Friday';
                    $daycount = 5;
                }
                if($saturday == 1){
                    $day[] = 'Saturday';
                    $daycount = 6;
                }
                if($sunday == 1){    
                    $day[] = 'Sunday';
                    $daycount = 7;
                }
                foreach($day as $days){
                    if($days == $pageday){
                    $redline = 'redline';
                    $weight = 1;                    
                }
                else{
                    $redline = 'no-redline';
                    $weight = 0;
                }
             }                
                $days = implode(', ', $day);
                $name = $u->name;
                $fname = $u->profile_first_name;
                $lname = $u->profile_last_name;
                $class_cat = $u->profile_class_category;           
                $badge = $u->roles[8];   
                $gender = $u->profile_gymnast_gender;
                
                if ($counter % 2 == 0) {
                        $class = 'even';
                } else {
                        $class = 'odd';
                }
                                              
              if($weight != 1)
              {    
                $output .= '<tr class="'.$name. ' ' .$class.'">
                <td>'.$counter++.'</td>
                <td>'.$fname.' '.$lname.'</td>
                <td>'.$gender.'</td>                
                <td>'.' /180'.'</td>
                <td>'.'&nbsp;'.'</td>
                <td>'.'&nbsp;'.'</td><td>&nbsp;</td>
                </tr>';
                
              }  
             }             
           }
//            $output .= '</tr>';
            //*****************************
            
            $output .= '<tr>
                        <td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td></tr>';
            $output .= '<tr>
                        <td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td></tr>';	
            $output .= '<tr>
                        <td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td>'.
                        '<td>&nbsp;</td></tr>';	
             $output .= '</table>';
            
    }
    
    ///************************************************************
    
    return $output;
}

// This function is getting the week number of given date   //
function get_week_num($dateforweek){
    $ddate = $dateforweek;
    $duedt = explode("-", $ddate);    
    $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);    
    $week  = (int)date('W', $date);    
    return $week;
}

function user_role_load_by_id($role_id) {
    $queryrole = 'SELECT r.name ' .
       'FROM {role} AS r ' .
       'WHERE r.rid = "'.$role_id.'"';
    $resrole = db_query($queryrole);
    $rolename = db_result($resrole);    
    return $rolename;
}


function get_r_table($r1users, $break, $bad, $reportdate) {
	$output = '';

		$extra = '';
		$badtxt = $bad; 
		
//		if ($bad=='GYM-Badge 1') {
//			$extra = " or field_g_type_value ='TID-Badge 1'";
//			$badtxt = 'GYM-Badge 1 & TID-Badge 1';
//        }
//		if ($bad=='GYM-Badge 2') {
//			$extra = " or field_g_type_value ='TID-Badge 2'";
//			$badtxt = 'GYM-Badge 2 & TID-Badge 2';
//        }
		if ($bad=='SKIL-Badge') {
			$extra = " or field_g_type_value ='ELITE'";
			$badtxt = 'SKIL-Badge & ELITE';
        }

	$query = "select field_c_length_value from content_type_class where UNIX_TIMESTAMP(field_c_dates_value) < ".
			 strtotime($reportdate)." and ".strtotime($reportdate)." < UNIX_TIMESTAMP(field_c_dates_value2) and field_c_type_value='".$bad."'".
			 $extra;
			 
	$leng = db_result(db_query($query));

	if (stristr($leng, "variable")) {
		$leng = "&nbsp;&nbsp;/&nbsp;&nbsp;";
	} else {
		$leng = "/".$leng;
	}
	if ($r1users) {
					$output .= '	<p style="text-align:left; width:75%">'.$badtxt.'</p>
									<p><table border="0" class="capturetable " align="center" style="width:75%">';
					$output .= "<tr><th>#</th><th>Gymnast Name</th>
							<th>Gender</th>
							<th>Class<br>Length<br>(Min)</th>
							<th>Perform</th>
							<th>Effort</th>
							<th width='40%'>Comments</th>
							</tr>";
					
					 $counter = 1;	
					 foreach ($r1users as $row) {
									if ($counter % 2 == 0) {
										$class = 'even';
									} else {
										$class = 'odd';
									}
									// build fields
									if ($counter == $break && $counter != 1) {
										$class .= ' breakpoint';
										$is_checked = 'No';
									} else {
										
									}

									$output .= '<tr class="'.$class.'">
										<td>'.$counter.'</td>
										<td>'.$row['profile_values_profile_last_name_value'].' '.$row['profile_values_profile_first_name_value'].'</td>
										<td>'.$row['gender'].'</td>
										<td style="text-align:right">'.$leng.'</td>
										<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
										</tr>';

						$counter++;
					 }
					$output .= '<tr>
								<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
									'<td>&nbsp;</td>'.
								'<td>&nbsp;</td></tr>';
					$output .= '<tr>
								<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
									'<td>&nbsp;</td>'.
								'<td>&nbsp;</td></tr>';	
					$output .= '<tr>
								<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
								'<td>&nbsp;</td>'.
									'<td>&nbsp;</td>'.
								'<td>&nbsp;</td></tr>';	
					 $output .= '</table></p>';
	}
	return $output;
}

function get_coach_list() {
	$sql = "select u.uid from users u, users_roles ur where u.uid= ur.uid and u.status=1 and ur.rid=14";
	$result = db_query($sql);
	$clist = '';
	if ($result)
	{
		while($row = db_fetch_array($result)) {
			$u = user_load($row['uid']);
			profile_load_profile($u);
			$clist .= '<option value="'.$u->uid.'">'.$u->profile_last_name." ".$u->profile_first_name.'</option>';
		}
	}
	return $clist;
}

function get_role_name ($badge) {
	$query = "SELECT rid FROM role where name = '$badge'";
	$query = db_query($query);

	while ($name = db_fetch_object($query)) {
		$role_id = $name->rid;
	}
	
	if ($role_id) {
		return $role_id;
	} return false;
}

/* gets the group for the coach based on weekno, class and coach id */
function get_group_allocated_to_coach ($weekno, $roleid, $coach_id) {
	  $queryCheckSelected = "SELECT c.group_name " .
                         "FROM {coachallocatedtobadge} AS c " .
                         "WHERE c.badge_role = '$roleid' AND c.coach_id = '".$coach_id."' AND c.week_num = '".$weekno."' ";
                         
                          $resCheckSelected = db_query($queryCheckSelected);
                          $rowCheckSelected = db_fetch_array($resCheckSelected);
		                  $group_name = $rowCheckSelected['group_name'];
		                  
		                  //print '<br />'.$queryCheckSelected ;
		                  
	if ($group_name) {
		return $group_name;
	}else {
		return false;
	}
}

/* Gets the coach name and userid who is allocated to a group for a particular week/
used for GYM badges */
function get_coach_allocated_to_group ($weekno, $group, $badge) {	
	$query = "SELECT rid FROM role where name = '$badge'";
	$query = db_query($query);

	while ($name = db_fetch_object($query)) {
		$role_id = $name->rid;
	}
	
	$query = "SELECT `coach_name`, `coach_id` FROM coachallocatedtobadge WHERE `week_num` = $weekno AND `group_name` = '$group' AND `badge_role` = $role_id";
	
	//print $query."<br />";
	
	$result = db_query ($query);
	
	$row->coach_name = '';
	$row->coach_id = 0;
	while ($row = db_fetch_object ($result) ) {
		$return = $row;
	}
	
	return $return;
}

function printmembers($class,$reportdate,$coachid=NULL) {
	$class = str_replace("$"," ",$class);
		$date = date("Y-m-d", strtotime($reportdate));
        $fullday = date("l", strtotime($reportdate));        
        //echo $_REQUEST['print']; exit;
		$day = strtolower($fullday);
	$query = "select b.*
	from gym_badge_save b where badclass='".$class."' and baddate='".$reportdate."'";
	$badresult = db_query($query);

		$extra = '';
		$badtxt = $class; 
		
		if ($class=='GYM-Badge 1') {
			//$extra = " or field_g_type_value ='TID-Badge 1'";
			$badtxt = 'GYM-Badge 1';
        }
		if ($class=='GYM-Badge 2') {
			//$extra = " or field_g_type_value ='TID-Badge 2'";
			$badtxt = 'GYM-Badge 2';
        }
		if ($class=='SKIL-Badge') {
			$extra = " or field_g_type_value ='ELITE'";
			$badtxt = 'SKIL-Badge & ELITE';
        }

	$query = "select field_c_length_value from content_type_class where UNIX_TIMESTAMP(field_c_dates_value) < ".
		strtotime($reportdate)." and ".strtotime($reportdate)." < UNIX_TIMESTAMP(field_c_dates_value2) and field_c_type_value='".$class."'".
		$extra;
	$leng = db_result(db_query($query));

	$date = date("Y-m-d", strtotime($reportdate));
	$fullday =  date("l", strtotime($reportdate));    

	if (!$coachid) {
	$output = '<div align="right" width="95%"><a onclick="callprint()" href="#" id="xpr">Print</a>&nbsp;&nbsp;</div>';
	$output .= '<div align="center" width="100%"><h2 style="font-size:17px">'.$badtxt.' - Attendance Register</h3></div>';
	$output .= '<div align="center" width="100%"><h4>'.date('l', strtotime($reportdate)).', '.date('dS F Y', strtotime($reportdate)).'</h4></div>';
	$output .= '<p style="height:0px">&nbsp;</p>';
	}

	if ($coachid) {
	  $output .= '	<p>&nbsp;</p><p style="text-align:left; width:75%">'.$badtxt.'</p>';
	  $output .= '<table border="0" class="capturetable" align="center" style="width:75%">';
	} else {
	  $output .= '<table border="0" class="capturetable" align="center">';
	}

	$output .= "<tr><th>#</th><th>Gymnast Name</th>
			<th>Gender</th>
			<th>Class<br>Length<br>(Min)</th>
			<th>Perform</th>
			<th>Effort</th>
			<th width='40%'>Comments</th>
			</tr>";

	$addto = "";
	$f = "profile_".$day;
    $counter = 1;
	while ($badrow = db_fetch_array($badresult)) {
		$u = user_load($badrow['baduser']);
		profile_load_profile($u);
		
		if ($coachid) {
			$ucoach = get_gymcoach_uid($u->uid);
			if ($ucoach != $coachid) {
				continue;
			}
		}

		if ($counter % 2 == 0) {
            $sclass = 'even ';
        } else {
            $sclass = 'odd ';
        }
		if ($u->{$f}==0 && $addto=="") {
			$addto = " breakpoint";
		}
		if ($u->{$f}==0) {
			$other = "background-color:yellow";
		} else {
			$other = "";
		}

		$roles = array_values($u->roles);
		if (
				in_array('TID-Badge 1', $roles)
				|| in_array('TID-Badge 2', $roles)
				|| in_array('Elite', $roles)
		)
		{
			$name = strtoupper($u->profile_last_name." ".$u->profile_first_name);
		} else {
			$name = $u->profile_last_name." ".$u->profile_first_name;
		}
		$output .= '<tr class="'.$sclass.$addto.'">
			<td style="padding:1px">'.$counter.'.</td>'.
			'<td style="padding:1px" style="'.$other.'">'.$name.'</td>'.
			'<td style="padding:1px" style="'.$other.'">'.$u->profile_gymnast_gender.'</td>'.
			'<td style="padding:1px" align="right">/'.$leng.'</td>'.
			'<td style="padding:1px" >&nbsp;</td>'.
			'<td style="padding:1px">&nbsp;</td>'.
			'<td style="padding:1px">&nbsp;</td></tr>';
		if ($addto!="") {
			$addto = "x";		
		}
		$counter++;
	}
	$output .= '<tr>
		<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td></tr>';
	$output .= '<tr>
		<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td></tr>';
	$output .= '<tr>
		<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td></tr>';

	if (!$coachid) {
	$output .= '<tr>
		<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td></tr>';
	$output .= '<tr>
		<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td>'.
		'<td style="padding:1px">&nbsp;</td></tr>';
	}
	$output .= "</table>";


	/*$output .= "<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	
	";*/
	if (!$coachid) {
	$output .= "<script> function callprint() { document.getElementById('xpr').style.display='none';window.print();} </script>";
	}

	if ($coachid) {
		if ($counter <= 1) {
			return '';
		}
	}
	return $output;
	//exit;
}

function gym_badge_get_overall_score_add ($uid = false) {
	// get all the evaluations for the role

	if ($uid) {
		$query = "SELECT * FROM {gym_total} WHERE uid=%d";
		$result = db_query ($query, array($uid));
	}else {
		$query = "SELECT * FROM {gym_total} WHERE 1";
		$result = db_query ($query);
	}
	
	
	
	while ($row = db_fetch_object ($result)) {
		$arr [$row->uid]['G'] = $row->G;
		$arr [$row->uid]['Y'] = $row->Y;
		$arr [$row->uid]['M'] = $row->M;
		$arr [$row->uid]['N'] = $row->N;
		$arr [$row->uid]['A'] = $row->A;
		$arr [$row->uid]['S'] = $row->S;
		$arr [$row->uid]['T'] = $row->T;
		$arr [$row->uid]['Gdate'] = $row->Gdate;
		$arr [$row->uid]['Ydate'] = $row->Ydate;
		$arr [$row->uid]['Mdate'] = $row->Mdate;
		$arr [$row->uid]['Ndate'] = $row->Ndate;
		$arr [$row->uid]['Adate'] = $row->Adate;
		$arr [$row->uid]['Sdate'] = $row->Sdate;
		$arr [$row->uid]['Tdate'] = $row->Tdate;		
				
		$arr [$row->uid]['total'] = $row->total;
		$arr [$row->uid]['badge'] = $row->badge;
		$arr [$row->uid]['year'] = $row->year;
	}
	
	return $arr;
}


function gymcoachcompetency_save () {
    $sub_gender = $_POST['sub_gender'];
    $sub_badge = $_POST['sub_badge'];
    /* POST VAR



                    user_id: user_id_temp,
                    value_competency: selectedvalue,
                    report_date: "'.$reportdate.'",
                    report_year: '.$year.',
                    progress_report_id: '.$progress_report_id.',
                    coach_id: '.$coachid.',
                    role_id: '.$role_id.',
                    classid: '.$classid.',
                    report_day: "'.$day.'",
                    week_no: '.$weekno.',
                    class_name: "'.$class.'"
    */

    $temp_user_id = $_POST['user_id'];
    $user_load = user_load($temp_user_id);
    $coach_name = $user_load->profile_last_name ." ".$user_load->profile_first_name;

    $alert = "";

    $effort = $_POST['value_effort'];
    if ($effort == '-') {
        $effort = 0;
    }

    /*if ($effort != 0 && ($effort < 2 OR $effort > 4)) {
        $extra_msg = "<span class='alert_message'>Talk to Chad!</span><br /><br />";
        $alert = "Talk to Chad";
    }else {
        $extra_msg = '';
    }*/
    //$time_click = $_POST['time_click'];
    $class = $_POST['class_name'];
    $reportdate = $_POST['report_date'];
    $year = $_POST['report_year'];
    $progress_report_id = $_POST['progress_report_id'];
    $coach_id = $_POST['coach_id'];
    $role_id = $_POST['role_id'];
    $class_id = $_POST['classid'];
    $day = $_POST['report_day'];
    $weekno = $_POST['week_no'];
    $competency = $_POST['value_competency'];

    $competency = str_replace (",", " ", $competency);
    $competency = str_replace ("  ", " ", $competency);
    $competency = str_replace ("  ", " ", $competency);

    $competency_array = explode (" ", $competency);

    $error = false;
    $error_message = "";
    foreach ($competency_array as $c) {
        $c = trim($c);
        if (!is_numeric($c)) {
            $error = true;
            $error_message .= "<br />$c is not numeric";
        }

    }

    $reportdate_timestamp = strtotime ($reportdate);


    if ($error) {
        print_json (array ('msg' => "<span class='alert_message'>Comptency NOT SAVED - check values: $error_message</span>") );
    }else {

        $query = "SELECT * from coach_competency_allocation WHERE `coach_id` = $temp_user_id AND `progress_report_id` = $progress_report_id AND `sub_gender` = '".$sub_gender."' AND `sub_badge` = '".$sub_badge."'";
echo $query;
        watchdog("printclasslists", 'coach_competency_allocation: '. $query);

        $count_nodes = 0;

        $result = db_query($query);

        while($row = db_fetch_object ($result) ) {
            $count_nodes++;
            $cccid = $row->cccid;
        }

        if ($count_nodes) {
            // update existing gymanst row
            $query = "UPDATE coach_competency_allocation SET competency='$competency' WHERE `cccid` = $cccid AND `sub_gender` = '".$sub_gender."' AND `sub_badge` = '".$sub_badge."'";
            echo $query;

        } else {
            // insert new row
            $query = "INSERT INTO coach_competency_allocation (`progress_report_id`, `coach_id`, `competency`, `class`, `class_id`, `role_id`, `sub_badge`, `sub_gender`) VALUES ($progress_report_id, $temp_user_id, '".$competency."', '".$class."', '".$class_id."', $role_id, '".$sub_badge."','".$sub_gender."')";

        }
echo $query;
        watchdog("printclasslists", 'count nodes: '. $count_nodes);

        watchdog("printclasslists", 'update or insert query : '. $query);

        if (db_query ($query)) {
            print_json (array ('msg' => "Competency allocation saved for $coach_name.", 'alertstatus' => $alert) );
        }else {
            var_dump(db_error());
            print_json (array ('msg' => "<span class='alert_message'>Comptency NOT SAVED - SYSTEM ERROR, please contact website admin.</span>") );
        }
    }

}
function getcriteriaforcoaches() {

    $progress_report_id = $_POST["progress_report_id"];
    $classid = $_POST["classid"];
    $sub_badge =  $_POST["sub_badge"];
    $sub_gender =  $_POST["sub_gender"];
    $query = "SELECT * FROM coach_competency_allocation WHERE progress_report_id = '".$progress_report_id."' AND class_id = '".$classid."' AND sub_gender = '".$sub_gender."' AND sub_badge = '".$sub_badge."'";

    if($sub_gender == 'Male') {
        $sub_genderx = "boys";
    }
    if($sub_gender == 'Female') {
        $sub_genderx = "girls";
    }


    //print $query;

    $result = db_query ($query);

    while ($row = db_fetch_object ($result)) {
        $competency = str_replace (",", " ", $row->competency);
        $competency = str_replace ("  ", " ", $row->competency);
        $competency = str_replace ("  ", " ", $row->competency);
        $returnx[$row->coach_id] = $competency;
    }


    $query = 'SELECT u.uid, u.name ' .
        'FROM {users} AS u ' .
        'JOIN {users_roles} AS ur ' .
        'ON ur.uid = u.uid ' .
        'WHERE ur.rid = 14' ;

    $res = db_query($query);
    /*print "<pre>";
    print_r ($return);
    print "</pre>";*/

    $sqla = "SELECT * FROM gym_criteria WHERE badge = '". $sub_badge."' AND gender = '".$sub_genderx."' AND type = 'h' ORDER BY number";
    $sqlx = db_query($sqla);
    //echo $sqla;
    $return = "";
    $return .= "<div>";
    while($row = db_fetch_object($sqlx)) {

        $return .=  "<div>".$row->number." | ".$row->category."</div>";
    }
    $return .= "</div>";

    while($row = db_fetch_object ($res)){
        $uid = $row->uid;
        $return .= "<div class='gymnast_row gymnast_row_coach'>";
        $return .= 		"<div class='gymnast_name'>". $row->name."</div>";
        $return .= "<input type='text' name='competency_{$uid}' id='competency_{$uid}' width=20 value='".$returnx[$uid]."'/> &nbsp;
    <input type=\"button\" name=\"button_{$uid}\" id=\"button_{$uid}\" value=\"Save\" class='button_save' />";
        $return .= "</div>";
    }


    echo $return;
}