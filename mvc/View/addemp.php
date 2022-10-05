<main>
        <div class="main-4">
            <h1>Employee Details</h1>
            <div class="col-4">
                <form method="post">
                <div class="col-4-1">
                    <p>Username</p><p class="user-name">(Use only a-z and 0-9)</p>
                </div>
                    <div class="col-4-2">
                        <input type="text" name="username" id="task-title" class="bd input-4">
                    </div>
            </div>        
            <div class="col-4">
                <div class="col-4-1">
                    <p>Email</p>
                </div>
                <div class="col-4-2">
                    <input type="email" name="email-emp" id="email-emp" placeholder="Enter E-mail" class="bd input-4" required>
                </div>
            </div>
            <div class="col-4">
                <div class="col-4-1">
                    <p>(min length 6 | max length 20 | a-zA-Z 0-9 @ $)</p>
                </div>
                <div class="col-4-2">   
                    <input type="password" name="pass-emp" id="pass-emp" placeholder="Password" class="bd input-4" required>
                </div>
            </div>
            <div class="col-2">
                <div class="col-2-3">
                    <p>User Role</p>
                </div>
                <div class="col-2-4">
                    <select name="userrole" id="user-role " class="bd input-5">
                        <option value="bussniessowner"  selected>BussniessOwner</option>
                     </select>     
                </div>
            </div>
            <div class="col-2">
                <div class="col-2-3">
                    <p>Name</p>
                </div>
                <div class="col-2-4">
                    <input type="text" name="name" id="name" placeholder="Name" class="bd input-5">    
                </div>
            </div>
            <div class="col-2">
                <div class="col-2-3">
                    <p>Address</p>
                </div>
                <div class="col-2-4">
                    <input type="text" name="address" id="address" placeholder="Address" class="bd input-5">    
                </div>
            </div>
            
            <div class="col-2">
                <div class="col-2-3">
                    <p>City</p>
                </div>
                <div class="col-2-4">
                    <input type="text" name="city" id="city" placeholder="City" class="bd input-5">    
                </div>
            </div>
            
            <div class="col-2">
                <div class="col-2-3">
                    <p>State</p>
                </div>
                <div class="col-2-4">
                    <input type="text" name="state" id="state" placeholder="State" class="bd input-5">    
                </div>
            </div>
            
            <div class="col-2">
                <div class="col-2-3">
                    <p>Country</p>
                </div>
                <div class="col-2-4">
                    <input type="text" name="country" id="country" placeholder="Country" class="bd input-5">    
                    <input type="text" name="postbox" id="postbox" placeholder="Postbox" class="bd input-5">
                </div>
                
            </div>
            
            <div class="col-2">
                <div class="col-2-3">
                    <p>Phone</p>
                </div>
                <div class="col-2-4">
                    <input type="tel" name="phone" id="phone" placeholder="Phone" class="bd input-5">    
                </div>
            </div>
            
            <div class="col-2">
                <div class="col-2-3">
                    <p>Salary</p>
                </div>
                <div class="col-2-4">
                    <input type="salary" name="salary" id="salary" placeholder="Salary" class="bd input-5">    
                </div>
            </div>
            
            <div class="col-2">
                <div class="col-2-3">
                    <p>Department</p>
                </div>
                <div class="col-2-4">
                    <select name="dept" id="dept" class="bd input-5">
                        <option value="no" selected>Default- No</option>
                    </select>    
                </div>
            </div>
            </div>
            <div class="col-2">
                <div class="col-2-2">
                </div>
                <div class="col-2-1">
                    <input type="submit" value="Add Employee" name="submit" class="button">
                </div>
                </form>
            </div>
        </div>
    </main>