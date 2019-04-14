Nova.booting((Vue, router, store) => {
    router.beforeEach((to, from, next) => {

        if (to.name == 'detail' && from.params.resourceName == to.params.resourceName) {
            const currentResource = Nova.config.resources.filter(resource => resource.uriKey === to.params.resourceName)[0];

            if (from.name == 'create' && currentResource.afterCreatinRedirectTo) {
                return next(currentResource.afterCreatinRedirectTo)
            }

            if (from.name == 'edit' && currentResource.afterUpdateRedirectTo) {
                return next(currentResource.afterUpdateRedirectTo);
            }
        }
        next();

    });
});
