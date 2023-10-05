<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchTerm = document.getElementById('q');
        const userSearchButton = document.getElementById('user-search-book');
        const mainCategory = document.getElementById('main-category');
        const subCategory = document.getElementById('sub-category');
        const publisher = document.getElementById('name-of-publisher');

        const currentPage = <?php echo $page ?? ''; ?>

        userSearchButton.addEventListener('click', updateResults);
        mainCategory.addEventListener('change', updateResults);
        subCategory.addEventListener('change', updateResults);
        publisher.addEventListener('change', updateResults);

        function updateResults() {
            var newURL = window.location.href.split('?')[0] + `?q=${encodeURIComponent(searchTerm.value)}&main-category=${encodeURIComponent(mainCategory.value)}&sub-category=${encodeURIComponent(subCategory.value)}&publisher=${encodeURIComponent(publisher.value)}&page=` + currentPage;

            window.history.replaceState({}, '', newURL);
            window.location.replace(newURL);
            // fetch(newURL)
            //     .then(response => response.json)
            //     .then(data => {
            //         console.log(data);
            //     })
            //     .catch(error => {
            //         console.error("Error fetching data: ", error);
            //     })
        }
        // function updateResults() {
        //     const query = searchTerm.value.toLowerCase();
        //     const selectedMainCategory = mainCategory.value.toLowerCase();
        //     const selectedSubCategory = subCategory.value.toLowerCase();
        //     const selectedPublisher = publisher.value.toLowerCase();

        //     Array.from()
        // }
    });
</script>