<script>
        function other_input(args) {
            console.log(args)
            const position_input = document.getElementById("other_div");

            if (args.value === "other"){
                position_input.style.display = "block";
            }

            else {
                position_input.style.display = "none";
            }


        }

    </script>