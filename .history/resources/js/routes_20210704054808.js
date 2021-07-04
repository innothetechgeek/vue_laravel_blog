import PostsIndex from "./pages/frontend/posts/List";

export const routes = [
    {
        path: "/posts",
        name: "PostsIndex",
        component: PostsIndex
    },
    {
        path: "/employees/create",
        name: "EmployeesCreate",
        component: EmployeesCreate
    },
    {
        path: "/employees/:id",
        name: "EmployeesEdit",
        component: EmployeesEdit
    }
];
