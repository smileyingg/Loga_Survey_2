 <?php
    $sqlselect = "SELECT * FROM candidate WHERE one_id = '$_COOKIE[ONEID]'";
    $qurerySelect = mysqli_query($mysqli, $sqlselect);
    $row = mysqli_fetch_assoc($qurerySelect);

    $roundPlus = $row['round_id'] + 1;
    $update = "UPDATE candidate SET round_id = $roundPlus WHERE one_id = '$_COOKIE[ONEID]'";
    mysqli_query($mysqli, $update);

    foreach ($_POST as $question_id => $candidate_answersheet) {

        if ($question_id != "action") {
            // echo ข้อที่, $question_id, ' ', 'ตอบ ', '', $candidate_answersheet, '</br>';
            $sql = "INSERT INTO candidate_answersheet (question_id, choose_answer, one_id, round_id) VALUES ('$question_id', '$candidate_answersheet', '$_COOKIE[ONEID]', '$roundPlus')";
            $result = mysqli_query($mysqli, $sql);
        }
    }

    if ($result) {
        //swal("OK!", "ระบบได้ทำการบันทึกข้อมูลเรียบร้อยแล้ว", "Success");
        echo 'true';
        // header('Location: http://localhost/oneid/login.php');

    } else {
        // header('Error Page');
        // swal("Oops!", "Something went wrong on the page!", "error");
        echo 'fail!!';
    }
    ?>
