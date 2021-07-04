import PostsIndex from "./pages/frontend/posts/Index";
import PostDetail from "./pages/frontend/posts/Detail";
const ItWorks = {
    template: '<div>It works!</div>'
  }

export const routes = [
    {
        path: "/posts",
        name: "PostsIndex",
        component: ItWorks
    },
    {
        path: "/post/detail",
        name: "PostDetail",
        component: ItWorks
    },
    

];
