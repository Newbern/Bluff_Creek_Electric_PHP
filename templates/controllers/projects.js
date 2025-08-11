<script>
        // Current posts
        let currentPosts = {
            client: 1,
            generators: 1,
            electrical_needs: 1,
            utility: 1
        };

        // Next Post Functions
        function next_post(name){
            console.log("next post")
            console.log(currentPosts[name])
            // Checking if Next Posts Id exits
            if (document.getElementById(name+"-post-"+(currentPosts[name]+1))){
                // Old Post
                const old_post = document.getElementById(name+"-post-"+currentPosts[name]);

                // New Post
                currentPosts[name]++
                const new_post = document.getElementById(name+"-post-"+currentPosts[name]);

                // Updating
                old_post.classList.remove("show-post");
                new_post.classList.add("show-post")
            }
            else {

                // Old Post
                const old_post = document.getElementById(name+"-post-"+currentPosts[name]);

                // New Post
                currentPosts[name] = 1;
                const new_post = document.getElementById(name+"-post-"+currentPosts[name]);

                 // Updating
                try {
                    old_post.classList.remove("show-post");
                    new_post.classList.add("show-post")
                } catch (eer) {
                    console.log("No other post for : "+name)
                }



            }
        }

        // Previous Post Functions
        function prev_post(name){
            console.log("Prev post")
            console.log(currentPosts[name])
            if (document.getElementById(name+"-post-"+(currentPosts[name]-1))){
                // Old Post
                const old_post = document.getElementById(name+"-post-"+currentPosts[name]);

                // New Post
                currentPosts[name]--
                const new_post = document.getElementById(name+"-post-"+currentPosts[name]);

                // Updating
                old_post.classList.remove("show-post");
                new_post.classList.add("show-post")

            }
            else {

                // Old Post
                const old_post = document.getElementById(name+"-post-"+currentPosts[name]);

                // New Post
                currentPosts[name] = document.querySelectorAll(`[id^="${name}-post-"]`).length
                const new_post = document.getElementById(name+"-post-"+currentPosts[name]);

                 // Updating
                old_post.classList.remove("show-post");
                new_post.classList.add("show-post")
            }
        }

        // Timer setup
        let TimerId;
        const Timeout = 5000;

        function startTimer() {
            TimerId = setInterval(next_post, Timeout);
        }

        function resetTimer() {
            clearInterval(TimerId);
            startTimer();
        }

        window.onload = () => {
            console.log("Loading Current");
            document.getElementById("client-post-"+currentPosts["client"]).classList.add("show-post");
            document.getElementById("generators-post-"+currentPosts["generators"]).classList.add("show-post");
            document.getElementById("electrical_needs-post-"+currentPosts["electrical_needs"]).classList.add("show-post");
            document.getElementById("utility-post-"+currentPosts["utility"]).classList.add("show-post");
            startTimer();
            document.addEventListener("click", resetTimer);
            document.addEventListener("mousemove", resetTimer);
            document.addEventListener("keydown", resetTimer);
            document.addEventListener("touchstart", resetTimer);
        }

    </script>