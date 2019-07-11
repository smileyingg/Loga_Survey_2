<!DOCTYPE html>
<html>
<?php require_once 'dbconfig.php'; ?>
<?php require_once 'head.php'; ?>
<style>
  #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: red;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }

  #myBtn:hover {
    background-color: #555;
  }
</style>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <div class="main-wrapper" id="main-wrapper">

    <?php require_once 'header.php'; ?>

    <div class="container-fluid" style="margin-top: 100px;">
      <?php

      $sql = "SELECT s.id, s.q11, s.q12, s.q21, s.q22, s.q23, s.q24, s.q31, s.q32, s.q33, s.q34, s.q41, s.q42, s.q43, s.q5, s.q6, q.q7_detail, s.q8, s.q9, s.userTime, s.IP, s.device
                        FROM survey_form s
                        LEFT JOIN q7 q
                        on s.id = q.id
                        order by userTime DESC";
      $result = mysqli_query($mysqli, $sql)

      ?>
      <?php
      $sqlCount = "SELECT COUNT(*) AS SURVEY FROM survey_form";
      $result_survey = mysqli_query($mysqli, $sqlCount);
      $count_survey = mysqli_fetch_assoc($result_survey)

      ?>
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <h5 class="card-title">Dashboard</h5>
              <h5 class="right">จำนวนคนที่ตอบแบบสอบถามทั้งหมด <?= $count_survey['SURVEY']; ?> คน</h5>
              <p>Result Survey</p>

              <table class="striped">

                <thead>
                  <tr>
                    <th>User</th>
                    <th>1.1</th>
                    <th>1.2</th>
                    <th>2.1</th>
                    <th>2.2</th>
                    <th>2.3</th>
                    <th>2.4</th>
                    <th>3.1</th>
                    <th>3.2</th>
                    <th>3.3</th>
                    <th>3.4</th>
                    <th>4.1</th>
                    <th>4.2</th>
                    <th>4.3</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>SubmitTime</th>
                    <th>UserIP</th>
                    <th>Device</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $idCount = 1;
                  while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                      <!--<td><?= $row['id']; ?></td>-->
                      <td><?= $idCount; ?></td>
                      <td><?= $row['q11']; ?></td>
                      <td><?= $row['q12']; ?></td>
                      <td><?= $row['q21']; ?></td>
                      <td><?= $row['q22']; ?></td>
                      <td><?= $row['q23']; ?></td>
                      <td><?= $row['q24']; ?></td>
                      <td><?= $row['q31']; ?></td>
                      <td><?= $row['q32']; ?></td>
                      <td><?= $row['q33']; ?></td>
                      <td><?= $row['q34']; ?></td>
                      <td><?= $row['q41']; ?></td>
                      <td><?= $row['q42']; ?></td>
                      <td><?= $row['q43']; ?></td>
                      <td><?= $row['q5']; ?></td>
                      <td><?= $row['q6']; ?></td>
                      <td><?= $row['q7_detail']; ?></td>
                      <td><?= $row['q8']; ?></td>
                      <td><?= $row['q9']; ?></td>
                      <td><?= $row['userTime']; ?></td>
                      <td><?= $row['IP']; ?></td>
                      <td><?= $row['device']; ?></td>
                    </tr>

                    <?php
                    $idCount++;
                  }
                  mysqli_free_result($result);
                  // echo "Fetched data successfully\n";
                  mysqli_close($mysqli);
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <?php require_once 'footer.php' ?>

  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

</body>

</html>