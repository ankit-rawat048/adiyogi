<?php
$message = "";

if (isset($_POST['submit'])) {

    $fname       = trim($_POST['fname']);
    $lname       = trim($_POST['lname']);
    $birthdate   = trim($_POST['birthdate']);
    $gender      = trim($_POST['gender']);
    $address1    = trim($_POST['address1']);
    $address2    = trim($_POST['address2']);
    $city        = trim($_POST['city']);
    $state       = trim($_POST['state']);
    $zip         = trim($_POST['zip']);
    $country     = trim($_POST['country']);
    $email       = trim($_POST['email']);
    $whatsapp    = trim($_POST['whatsapp']);
    $phone       = trim($_POST['phone']);
    $courseMonth = trim($_POST['course_month']);
    $courseDate  = trim($_POST['course_date']);
    $courseName  = trim($_POST['course_name']);
    $accommodation = trim($_POST['accommodation']);
    $queryText   = trim($_POST['query']);

    if (!$fname || !$lname || !$birthdate || !$gender || !$email) {
        $message = "<p class='text-red-600 text-center mb-4'>Please fill all required fields.</p>";
    } else {
        $sql = "INSERT INTO registrations (
            fname, lname, birthdate, gender, address1, address2,
            city, state, zip, country,
            email, whatsapp, phone,
            course_month, course_date, course_name,
            accommodation, query_text, created_at
        ) VALUES (
            '$fname','$lname','$birthdate','$gender','$address1','$address2',
            '$city','$state','$zip','$country',
            '$email','$whatsapp','$phone',
            '$courseMonth','$courseDate','$courseName',
            '$accommodation','$queryText', NOW()
        )";

        if (mysqli_query($conn, $sql)) {
            $message = "<p class='text-green-600 text-center mb-4'>Registration submitted successfully.</p>";
        } else {
            $message = "<p class='text-red-600 text-center mb-4'>Error: ".mysqli_error($conn)."</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<?php include('components/header.php'); ?>

<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-xl p-10 my-10">

  <h2 class="text-3xl font-bold text-center mb-6">Registration Form</h2>

  <?= $message ?>

  <form method="POST">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <div>
        <label class="font-semibold">First Name *</label>
        <input type="text" name="fname" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Last Name *</label>
        <input type="text" name="lname" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Birth Date *</label>
        <input type="date" name="birthdate" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Gender *</label>
        <select name="gender" required class="mt-1 w-full border p-2 rounded">
          <option value="">Select Gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>

      <div>
        <label class="font-semibold">Street Address 1 *</label>
        <input type="text" name="address1" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Street Address 2</label>
        <input type="text" name="address2" class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">City *</label>
        <input type="text" name="city" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">State *</label>
        <input type="text" name="state" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Postal / ZIP *</label>
        <input type="text" name="zip" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Country *</label>
        <input type="text" name="country" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Email *</label>
        <input type="email" name="email" required class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">WhatsApp Number</label>
        <input type="text" name="whatsapp" class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Phone Number</label>
        <input type="text" name="phone" class="mt-1 w-full border p-2 rounded">
      </div>

      <div>
        <label class="font-semibold">Course Month *</label>
        <select name="course_month" required class="mt-1 w-full border p-2 rounded">
          <option value="">Select Month</option>
          <?php
          $months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
          foreach ($months as $m) echo "<option>$m</option>";
          ?>
        </select>
      </div>

      <div>
        <label class="font-semibold">Course Date *</label>
        <select name="course_date" required class="mt-1 w-full border p-2 rounded">
          <option value="">Select Date</option>
          <option>3rd</option>
          <option>7th</option>
        </select>
      </div>

      <div class="md:col-span-2">
        <label class="font-semibold">Course Name *</label>
        <select name="course_name" required class="mt-1 w-full border p-2 rounded">
          <option value="">Select Course</option>
          <option>100 Hour Multistyle YTTC</option>
          <option>200 Hour Multistyle YTTC</option>
          <option>300 Hour Multistyle YTTC</option>
          <option>500 Hour Multistyle YTTC</option>
          <option>3 Days Yoga Retreat</option>
          <option>5 Days Yoga Retreat</option>
          <option>7 Days Yoga Retreat</option>
          <option>10 Days Yoga Retreat</option>
          <option>Ayurveda Massage & Wellness Course</option>
          <option>Ayurveda Treatment</option>
          <option>Astrology Basic</option>
          <option>Astrology Intermediate</option>
          <option>Sound Healing Basic</option>
          <option>Sound Healing Intermediate</option>
          <option>Online YTTC 100 Hour</option>
          <option>Online YTTC 200 Hour</option>
          <option>Daily Drop-In</option>
        </select>
      </div>

      <div>
        <label class="font-semibold">Accommodation *</label>
        <select name="accommodation" required class="mt-1 w-full border p-2 rounded">
          <option value="">Select Accommodation</option>
          <option>Private Room</option>
          <option>Double Sharing</option>
          <option>Triple Sharing</option>
          <option>Quad Sharing</option>
        </select>
      </div>

      <div class="md:col-span-2">
        <label class="font-semibold">Tell us about your query *</label>
        <textarea name="query" required class="mt-1 w-full border p-2 rounded h-28"></textarea>
      </div>

    </div>

    <button type="submit" name="submit"
      class="mt-8 w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg">
      Register & Pay
    </button>

  </form>
</div>

<?php include('components/footer.php'); ?>

</body>
</html>
