<script>

        const Resident = document.getElementById('Resident');
        const Comm = document.getElementById('Comm');

        function Residential(){
            // Active
            Resident.classList.add("active")
            Comm.classList.remove("active")
            // Service Tabs
            document.getElementById("Resident-container").style.display = "flex";
            document.getElementById("Comm-container").style.display = "none";
            // Color Change
            document.querySelector(".service-tab-container").style.backgroundColor = "red"
        }
        function Commercial(){
            // Active
            Resident.classList.remove("active")
            Comm.classList.add("active")
            // Service Tabs
            document.getElementById("Resident-container").style.display = "none";
            document.getElementById("Comm-container").style.display = "flex";
            // Color Change
            document.querySelector(".service-tab-container").style.backgroundColor = "dodgerblue"
        }
    </script>