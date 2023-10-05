<script>
    const main_categories = document.querySelector('#main-category');
    if (main_categories) {
        const choicesMainCategories = new Choices(main_categories, {
            searchEnabled: true,
            searchChoices: true,
            allowHTML: true,
        });
    }

    const sub_categories = document.querySelector('#sub-category');
    if (sub_categories) {
        const choicesSubCategories = new Choices(sub_categories, {
            searchEnabled: true,
            searchChoices: true,
            allowHTML: true,
        });
    }

    const publishers = document.querySelector('#name-of-publisher');
    if (publishers) {
        const choicesPublishers = new Choices(publishers, {
            searchEnabled: true,
            searchChoices: true,
            allowHTML: true,
        });
    }

    const kp_types = document.querySelector('#kp_type');
    if (kp_types) {
        const choicesKPTypes = new Choices(kp_types, {
            searchEnabled: true,
            searchChoices: true,
            allowHTML: true,
        });
    }

    const kp_categories = document.querySelector('#kp_category');
    if (kp_categories) {
        const choicesKPCategories = new Choices(kp_categories, {
            searchEnabled: true,
            searchChoices: true,
            allowHTML: true,
        });
    }
</script>