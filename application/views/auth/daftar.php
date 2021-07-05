
<body>
    <h1>
        <marquee direction="left" style="color: white;">Daftar menjadi anggota Runeterra</marquee>
    </h1>

    <h2 style="color: white;">Silahkan join</h2>
    <form action="<?=base_url("auth/register")?>" method="POST">
        <div>
            <label for="username" style="color: white;">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" />
            
        </div>
        <div>
            <label for="email" style="color: white;">Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email" />
        </div>
        <div>
            <label for="password" style="color: white;">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" />
        </div>
        <hr>
        <input type="submit" value="Kirim"> 
        <hr>
    </form>
</body>

