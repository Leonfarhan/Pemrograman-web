<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Karyawan</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <section>
        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder=""/>
        </p>
        <p>
            <label for="email">Email: </label>
            <textarea name="email"></textarea>
        </p>
        <p>
            <label for="address">Address: </label>
            <textarea name="address"></textarea>
        </p>
        <p>
            <label for="gender">Gender: </label>
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
        </p>
        <p>
            <label for="position">Position: </label>
            <select name="position">
                <option>Front-end Developer</option>
                <option>Back-end Developer</option>
                <option>Mobile Developer</option>
                <option>UI/UX</option>
                <option>Fullstack Developer</option>
            </select>
        </p>
        <p>
            <label for="status">Status: </label>
            <label><input type="radio" name="status" value="fulltime"> Fulltime</label>
            <label><input type="radio" name="status" value="halftime"> Halftime</label>
        </p>
        <p>
            <input type="submit" value="Sumbit" name="submit" />
        </p>
        </section>
        <p>
            <a href="index.php">kembali</a>
        </p>

    </form>

    </body>
</html>