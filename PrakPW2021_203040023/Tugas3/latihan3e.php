<?php 

?>

<?php 
$barang = [
    [
        "Name" => "Bundle Glitch Pop",
        "Description" => "Weapon Skin dengan tema kekinian",
        "Detail" => "Berisi Skin : Knife, Frenzy, Odin, Judge, Bulldog",
        "Price" => 870000,
        "StokItem" => 5,
        "Picture" => "gp.jpg"
    ],
    [
        "Name" => "Bundle Glitch Pop 2.0",
        "Description" => "Weapon Skin dengan tema kekinian versi ke 2",
        "Detail" => "Berisi Skin : Knife, Operator, Vandal, Phantom, Classic",
        "Price" => 870000,
        "StokItem" => 6,
        "Picture" => "gp2.0.jpg"
    ],
    [
        "Name" => "Bundle Elder Flame",
        "Description" => "Weapon Skin dengan tema naga yang sangar",
        "Detail" => "Berisi Skin : Knife, Operator, Judge, Frenzy, Vandal",
        "Price" => 990000,
        "StokItem" => 3,
        "Picture" => "elderflames.jpg"
    ],
    [
        "Name" => "Bundle Sovereign",
        "Description" => "Weapon Skin dengan tema kerajaan",
        "Detail" => "Berisi Skin : Knife, Marshal, Ghost, Guardian, Stinger",
        "Price" => 710000,
        "StokItem" => 8,
        "Picture" => "sovereign.jfif"
    ],
    [
        "Name" => "Bundle Blast X",
        "Description" => "Weapon Skin dengan tema senjata mainan atau bisa dibilang senjata nerf",
        "Detail" => "Berisi Skin : Knife, Odin, Frenzy, Phantom, Spectre",
        "Price" => 870000,
        "StokItem" => 10,
        "Picture" => "blastx.jpg"
    ]
];

function rupiahIDR($uang){
    return "Rp" . number_format($uang,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant Bundle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th>Stok Item</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang["Name"]; ?></td>
                    <td><?= $barang["Description"]; ?></td>
                    <td><?= $barang["Detail"]; ?></td>
                    <td><?= rupiahIDR($barang["Price"]) ?></td>
                    <td><?= $barang["StokItem"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang["Picture"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>