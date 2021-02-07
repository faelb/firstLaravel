<template>
    <v-app id="inspire">
        <v-app-bar
            app
            dark
            shrink-on-scroll
            src='https://www.desktopbackground.org/download/o/2014/01/03/695388_magenta-backgrounds-free-vector-art-10551-free-downloads_1400x980_h.jpg'

        >



            <v-app-bar-nav-icon></v-app-bar-nav-icon>

            <v-toolbar-title>Test Management Tool</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn icon @click="switchToForm()">
                <v-icon>mdi-dots-vertical</v-icon>
            </v-btn>



        </v-app-bar>

        <v-main>
            <v-container id="loginContainer" v-if="state==='login'">
                <v-row>
                    <v-col :cols="12">
                <v-card
                class="mx-auto"
                width="400">
                    <v-card-title primary-title>
                        <h1>Login</h1>
                    </v-card-title>
                    <v-card-text>
                    <v-form>
                        <v-text-field
                            label="Username"
                            prepend-icon="mdi-account-circle"/>
                        <v-text-field
                            :type="showPassword ? 'text' : 'password'"
                            label="Password"
                            prepend-icon="mdi-lock"
                            :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                            @click:append="showPassword = !showPassword"
                        />
                    </v-form>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn color="success">Register</v-btn>
                        <v-spacer></v-spacer>
                        <v-btn color="info">Login</v-btn>
                    </v-card-actions>
                </v-card
                >
                    </v-col>
<!--                    <v-col>
                        <v-card
                            class="mx-auto"
                            width="400">
                            <v-card-title>
                                <h1>create Testcase</h1>
                            </v-card-title>
                            <v-card-text>
                                <v-form>
                                    <v-text-field
                                        label="Customername"
                                    />
                                    <v-text-field
                                        label="MSISDN"
                                    />


                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-btn color="success">Create</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>-->
                </v-row>

            </v-container>

            <v-container id="menuContainer" v-if="state==='menu'">
                <v-row>
                    <v-col :cols="6">
                        <v-hover
                            close-delay="200"
                            v-slot="{ hover }"
                        >
                        <v-card
                            id="hover"
                            :elevation="hover ? 16 : 2"
                            :class="{ 'on-hover': hover }"
                            class="mx-auto"
                            max-width="400">
                            <v-img
                                class="white--text align-end"
                                height="200px"
                                src='https://wallpapercave.com/wp/OdfgNTa.jpg'
                            >
                            <v-card-title>The Tool</v-card-title>
                            </v-img>
                            <v-card-subtitle class="pb-0">
                                create new Requests
                            </v-card-subtitle>

                            <v-card-text class="text--primary">


                                <div>request your Testdata</div>
                            </v-card-text>

                            <v-card-actions>
                                <v-icon>mdi-F
                                </v-icon>
                                <v-btn
                                    color="orange"
                                    text
                                >
                                    <v-icon>mdi-file-eye-outline</v-icon>
                                    Confluence
                                </v-btn>

                            </v-card-actions>
                        </v-card>
                        </v-hover>
                    </v-col>
                    <v-col :cols="6">
                        <v-hover
                            close-delay="200"
                            v-slot="{ hover }"
                        >
                        <v-card
                            id="hover"
                            :elevation="hover ? 16 : 2"
                            :class="{ 'on-hover': hover }"
                            class="mx-auto"
                            max-width="400">
                            <v-img
                                class="white--text align-end"
                                height="200px"
                                src='https://wallpapercave.com/wp/OdfgNTa.jpg'
                            >
                                <v-card-title>My Requests</v-card-title>
                            </v-img>
                            <v-card-subtitle class="pb-0">
                                see my Requests
                            </v-card-subtitle>

                            <v-card-text class="text--primary">


                                <div>get your Testdata</div>
                            </v-card-text>

                            <v-card-actions>
                                <v-btn
                                    color="orange"
                                    text
                                >
                                    <v-icon>mdi-file-eye-outline</v-icon>
                                    Confluence
                                </v-btn>

                            </v-card-actions>
                        </v-card>
                        </v-hover>
                    </v-col>
                    <v-col :cols="6">
                        <v-hover
                            close-delay="200"
                            v-slot="{ hover }"
                        >
                        <v-card
                            id="hover"
                            :elevation="hover ? 16 : 2"
                            :class="{ 'on-hover': hover }"
                            class="mx-auto"
                            max-width="400">
                            <v-img
                                class="white--text align-end"
                                height="200px"
                                src='https://wallpapercave.com/wp/OdfgNTa.jpg'
                            >
                                <v-card-title>Search Requests</v-card-title>
                            </v-img>
                            <v-card-subtitle class="pb-0">
                                Requests from other users
                            </v-card-subtitle>

                            <v-card-text class="text--primary">


                                <div>get your colleagues Testdata</div>
                            </v-card-text>

                            <v-card-actions>
                                <v-btn
                                    color="orange"
                                    text
                                >
                                    <v-icon>mdi-file-eye-outline</v-icon>
                                    Confluence
                                </v-btn>

                            </v-card-actions>
                        </v-card>
                        </v-hover>
                    </v-col>
                    <v-col :cols="6">
                        <v-hover
                            close-delay="200"
                            v-slot="{ hover }"
                        >
                        <v-card
                            id="hover"
                            :elevation="hover ? 16 : 2"
                            :class="{ 'on-hover': hover }"
                            class="mx-auto"
                            max-width="400">
                            <v-img
                                class="white--text align-end"
                                height="200px"
                                src='https://wallpapercave.com/wp/OdfgNTa.jpg'
                            >
                                <v-card-title>My Profile</v-card-title>
                            </v-img>
                            <v-card-subtitle class="pb-0">
                                your Profile settings
                            </v-card-subtitle>

                            <v-card-text class="text--primary">


                                <div>change your Profile</div>
                            </v-card-text>

                            <v-card-actions>
                                <v-btn
                                    color="orange"
                                    text
                                >
                                    <v-icon>mdi-file-eye-outline</v-icon>
                                    Confluence
                                </v-btn>

                            </v-card-actions>
                        </v-card>
                        </v-hover>
                    </v-col>

                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            state: "login",
            name: "",
            password: "",
            showPassword: false
        }
    },
    methods: {
        switchToForm(){
            if(this.state === "login"){
                this.state = "menu"
            }else{
                this.state = "login"
            }

        }
    }
}
</script>

<style scoped>
#hover {
    transition: opacity .4s ease-in-out;
}

#hover:not(.on-hover) {
    opacity: 0.6;
}

</style>
