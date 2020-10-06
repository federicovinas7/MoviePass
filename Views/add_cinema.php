<main class="container">
    <h1>New cinema</h1>
    <form action="<?php echo FRONT_ROOT ?>Cinema/add" method="post">
    <section>
        <label for="name">
            <span>Name</span>
            <input type="text" name="name" id="name" required >
        </label>
    </section>
    <section>
        <label for="address">
            <span>Address</span>
            <input type="text" name="address" id="address" required>
        </label>
    </section>
    <section>
        <label for="maxCapacity">
            <span>Max capacity</span>
            <input type="number" name="maxCapacity" id="maxCapacity" required>
        </label>
    </section>
    <section>
        <label for="ticketPrice">
            <span>Ticket Price</span>
            <input type="number" step="0.01" name="ticketPrice" id="ticketPrice" required>
        </label>
    <section>
        <button class="submit" type="submit">Register</button>
    </form>
</main>


