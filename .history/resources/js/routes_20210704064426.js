import PostsIndex from "./pages/frontend/posts/List";
import PostDetail from "./pages/frontend/posts/Detail";

export const routes = [
    {
        path: "/posts",
        name: "PostsIndex",
        component: PostsI
    },
    {
        path: "/post/detail",
        name: "PostDetail",
        component: PostDetail
    },
    

];
