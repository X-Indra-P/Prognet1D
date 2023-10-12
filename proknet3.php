<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="hasil.css">

    <title>Form Submission Result</title>
</head>
<body>
<?php
<?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $namalengkap = $_POST["nama"];
    $nim = $_POST["nim"];
    $alamat = $_POST["alamat"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $jurusan = $_POST["jurusan"];
    $email = $_POST["email"];

    // Display the retrieved data
    $formData = [
        "Nama Lengkap: $namalengkap",
        "NIM: $nim",
        "Alamat: $alamat",
        "Jenis Kelamin: $jeniskelamin",
        "Jurusan = $jurusan",
        "Email: $email",
    ];

    if (!empty($jurusan)) {
        $formData[] = "Jurusan Yang Anda Jalani:";
        foreach ($jurusan as $s) {
            $formData[] = "- $s";
        }
    } else {
        $formData[] = "Anda belum memilih jurusan.";
    }

    $formData[] = "Alamat Lengkap Anda:";
    $formData[] = $alamat;

    // Create a string with form data
    $formDataString = implode("\n", $formData);

    // Write form data to a text file
    $fileName = "HasilData.txt";
    $formDataString .= "\n";
    file_put_contents($fileName, $formDataString, FILE_APPEND);

    // Display a success message
    echo "<h1>Form Submission Result</h1>";
    echo "<p>Data has been saved to <strong>$fileName</strong>.</p>";
} else {
    echo "<p>Form submission error.</p>";
}
?>


<h2>Form Submission Result</h2>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">NIM</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td><?php echo $namalengkap; ?></td>
            <td><?php echo $nim; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $jeniskelamin; ?></td>
            <td>
                <?php
                if (!empty($jurusan)) {
                    echo "<ul>";
                    foreach ($jurusan as $s) {
                        echo "<li>$s</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "Anda belum memilih jurusan.";
                }
                ?>
            </td>
            <td><?php echo $email; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>
