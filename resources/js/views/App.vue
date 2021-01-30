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

            <v-btn icon>
                <v-icon>mdi-dots-vertical</v-icon>
            </v-btn>



        </v-app-bar>

        <v-main>
            <v-container>
                <v-row>
                    <v-col :cols="6">
                        <v-card
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
                    </v-col>
                    <v-col :cols="6">
                        <v-card
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
                    </v-col>
                    <v-col :cols="6">
                        <v-card
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
                    </v-col>
                    <v-col :cols="6">
                        <v-card
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
                    </v-col>

                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>

</style>
