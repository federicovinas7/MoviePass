<main class="container">
    <h1>Cinemas</h1>
    <div class="custom-scrollbar table-wrapper-scroll-y">
        <input type="text" id="input" onkeyup="myFunction()" placeholder="Search for names..">
        <table id="table" class="text-center table table-hover table-striped" >
            <thead>
                <tr class="th-pointer">
                    <th class="th-pointer">Name</th>
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
                        <td><form action="<?php echo FRONT_ROOT ?>Cinema/showModifyCinema" method="post">
                            <input type="hidden" name="id" value=<?php echo $cine->getId()?>>
                            <button type="submit" class="btn" >
                                <img src="/MoviePass/Views/img/wrench-4x.png" alt="trash_icon">     
                            </button>
                        </form></td>
                        <td><form action="<?php echo FRONT_ROOT ?>Cinema/remove" method="post">
                            <input type="hidden" name="id" value=<?php echo $cine->getId() //revisar si esto esta bien ?>>
                            <button type="submit" class="btn">
                                <img src="/MoviePass/Views/img/trash-4x.png" alt="trash_icon">
                            </button>
                        </form></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <a href="<?php echo FRONT_ROOT ?>Cinema/showAddCinema">
        <button type="submit">Add new cinema</button>
    </a>
</main>
