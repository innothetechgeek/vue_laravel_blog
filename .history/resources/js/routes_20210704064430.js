import PostsIndex from "./pages/frontend/posts/List";
import PostDetail from "./pages/frontend/posts/Detail";

export const routes = [
    {
        path: "/posts",
        name: "PostsIndex",
        component: PostsIn
    },
    {
        Vue.component(
            "employees-index",
            require("./components/employees/Index.vue").default
        );
        path: "/post/detail",
        name: "PostDetail",
        component: PostDetail
    },
    

];
