<div class="sidebar">

        <div class="panel list-group">

        <!-- Dashboard-->
        <a href="#" class="list-group-item bg-light text-dark btn" data-toggle="collapse" data-target="#dashboard">Dashboard</a>

        <div id="dashboard" class="collapse">

                <a href="{{ route('dashboardRoute') }}" class="list-group-item small text-dark btn">Dashboard</a>

        </div>

        <!-- Bloods -->
        <a href="#" class="list-group-item bg-light text-dark btn mt-1" data-toggle="collapse" data-target="#bloods">Manage Blood</a>

        <div id="bloods" class="collapse">

                <a href="{{ route('bloodRoute') }}" class="list-group-item small text-dark btn">Blood Groups</a>
                <a href="{{ route('bloodSearchRoute') }}" class="list-group-item small text-dark btn">Search Blood</a>

        </div>

        <!-- Districts -->
        <a href="#" class="list-group-item bg-light text-dark btn mt-1" data-toggle="collapse" data-target="#Districts">Manage District</a>

        <div id="Districts" class="collapse">

                <a href="{{ route('districtRoute') }}" class="list-group-item small text-dark btn">Manage District</a>

        </div>

        <!-- Thanas -->
        <a href="#" class="list-group-item bg-light text-dark btn mt-1" data-toggle="collapse" data-target="#thanas">Manage Thana</a>

        <div id="thanas" class="collapse">

                <a href="{{ route('thanaRoute') }}" class="list-group-item small text-dark btn">Manage Thana</a>

        </div>


        <!-- Schools -->
        <a href="#" class="list-group-item bg-light text-dark btn mt-1" data-toggle="collapse" data-target="#Schools">Manage School</a>

        <div id="Schools" class="collapse">

                <a href="{{ route('schoolRoute') }}" class="list-group-item small text-dark btn">Manage School</a>

        </div>


        <!-- Manage Donor -->
        <a href="#" class="list-group-item bg-light text-dark btn mt-1" data-toggle="collapse" data-target="#donor"> Manage Donor </a>

        <div id="donor" class="collapse">

                <a href="{{ route('donorRoute') }}" class="list-group-item small text-dark btn">Manage Donor</a>

        </div>



        </div>

</div>
