<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <h3>User Form</h3>

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
    @endforeach
    @endif
    <form action="/addUser" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
            @error('name')
            <span style="color:red">{{ $message }}</span>
            @enderror            
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
            @error('email')
            <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Pass</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <h5>Users Skills</h5>
            <input type="checkbox" name="skills[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills[]" id="node" value="node">
            <label for="node">NODE</label>
            <input type="checkbox" name="skills[]" id="js" value="js">
            <label for="js">JS</label>
        </div>
        <div class="form-group">
            <h5>City</h5>
            <select  name="city" >
            <option value="Mumbai">Mumbai</option>
            <option value="Pune">Pune</option>
            <option value="Banglore">Banglore</option>
            </select>
        </div>
        <div class="form-group">
            <h5>Gender</h5>
            <input type="radio" name="Gender" id="male" value="male">
            <label for="male">MALE</label>
            <input type="radio" name="Gender" id="female" value="female">
            <label for="female">FEMALE</label>
            
        </div>
        
        <button class="btn btn-primary" type="submit">Add User</button>
</form>
</div>


<style>
    .form-group {
        margin-bottom: 10px;
        margin-top: 10px;
        padding: 10px;
    }

    .form-control {
        width: 50%;
        padding: 10px;
        margin-left: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
        background-color: #f0f0f0;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        margin-right: 10px;
    }
</style>
