<?php
    require_once('nav.php');
?>
<main class="container">
    <h1>Cinemas</h1>
    <form action="<?php echo FRONT_ROOT ?>Cinema/showAddCinema" method="POST">
        <div class="custom-scrollbar table-wrapper-scroll-y">
            <table class="table table-hover table-striped" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Maximum capacity</th>
                        <th>Ticket price</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cinemas as $cine) {?>
                        <tr>
                            <td><?php echo $cine->getName()?></td>
                            <td><?php echo $cine->getAddress()?></td>
                            <td><?php echo $cine->getMaxCapacity()?></td>
                            <td><?php echo $cine->getTicketPrice()?></td>
                            <td><form action="<?php echo FRONT_ROOT ?>" method="post">
                                <button>Modify</button>
                            </form></td>
                            <td><form action="<?php echo FRONT_ROOT ?>Cinema/remove" method="post">
                                <input type="hidden" name="id" value=<?php echo $cine->getId() //revisar si esto esta bien ?>>
                                <button type="submit">Delete</button>
                            </form></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <button type="submit">Add new cinema</button>
    </form>
</main>
<script src="<?php echo JS_PATH ?>/tablejs.js"></script>