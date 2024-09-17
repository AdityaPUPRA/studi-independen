<?php
$title= "Dashboard";
require "layout/header.php";
?>
    <!-- Main Content -->
    <main class="p-4">
       <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <i class="bi bi-pie-chart-fill"></i>
                            <?= $title; ?>
                        </div>

                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nisi, tempore id molestias eos minima commodi facilis error incidunt dicta illum qui! Numquam aliquid autem doloremque odio laboriosam repellat eum?
                        </div>

                    </div>
                </div>
            </div>
       </div>
    </main>

<?php
require"layout/footer.php";
?>