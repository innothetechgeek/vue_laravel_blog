<template>
    <!-- site wrapper -->
<div class="site-wrapper">
    <Header/> 
    <!-- section main content -->
    <section class="main-content">
        <div class="container-xl">
            <div class="row gy-4 d-flex justify-content-center">
                <div class="col-lg-6">
                    <form>
                        <div class="alert alert-primary" role="alert" v-if="token">
                                Registration successful! Please click <router-link to="/login"><strong>here</strong></router-link> to login
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="name" v-model="form.name">
                                 <div class="col-12 d-flex justify-content-end">
                                    <span class="w-full text-red-500 error" v-if="errors.name">{{errors.name[0]}}</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" v-model="form.email">
                                 <div class="col-12 d-flex justify-content-end">
                                    <span class="w-full text-red-500 error" v-if="errors.email">{{errors.email[0]}}</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword3" v-model="form.password" placeholder="Password">
                                 <div class="col-12 d-flex justify-content-end">
                                    <span class="w-full text-red-500 error" v-if="errors.password">{{errors.password[0]}}</span><br>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" v-model="form.password_confirmation" placeholder="Password">
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button @click.prevent="register"  type="submit" class="btn" style="background: linear-gradient(to right, #FE4F70 0%, #FFA387 100%);adding-right: 1.3rem;
                                    padding-left: 1.3rem;padding: 1rem 4rem;">Register</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>

            <!-- instagram -->
            <InstagramFeed/>

            <!-- footer -->
            <PageFooter/>

        </div>
    </section>  
</div><!-- end site wrapper -->
</template>
<script>
   
    import Header from '../../components/frontend/PageHeader.vue'
    import PageFooter from '../../components/frontend/PageFooter.vue';    

     export default {
        components: {
            Header,
            PageFooter,
        },

        data(){
            return{
                form:{
                    name: '',
                    email: '',
                    password:'',
                    password_confirmation:''
                },
                errors:[],
                token:'',
            }
        },
        methods:{
            register(){
                axios.post('/api/register', this.form).then((response) =>{
                    this.token = response.data.token;
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }
        }
    }
</script>