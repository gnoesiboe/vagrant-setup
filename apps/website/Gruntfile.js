'use strict';

module.exports = function (grunt) {

    /**
     * Configures grunts imported tasks
     */
    grunt.initConfig({

        /**
         * Setup our package with the data that was defined in the
         * NPM package.json.
         */
        pkg: grunt.file.readJSON('package.json'),

        /**
         * Configure the concat script that is used for
         * concatenating all javascript files in the scripts
         * folder to to one javascript.
         */
        concat: {
            options: {
                // define a string to put between each file in the concatenated output
                separator: ';'
            },
            dist: {
                // the files to concatenate
                src: [
                    'app/bower_components/angular/angular.js',
                    'app/scripts/**/*.js'
                ],
                // the location of the resulting JS file
                dest: 'app/dist/<%= pkg.name %>.js'
            }
        },

        /**
         * Configure uglify js that will minimize our scripts
         * for us.
         */
        uglify: {
            options: {
                // the banner is inserted at the top of the output
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            dist: {
                'puhblic/dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
            }
        },

        jshint: {
            options: {
                jshintrc: '.jshintrc',
                reporter: require('jshint-stylish')
            },
            files: [
                'Gruntfile.js',
                'app/scripts/**/*.js'
            ]
        },

        watch: {
            files: [ '<%= jshint.files %>' ],
            tasks: [
                'jshint',
                'jasmine'
            ]
        },

        karma: {
            unit: {
                configFile: 'karma.conf.js'
            }
        },

        jasmine: {
            pivotal: {
                src: [
                    'app/bower_components/underscore/underscore.js',
                    'app/scripts/*.js',
                    'app/scripts/**/*.js'
                ],
                options: {
                    specs: [
                        'test/**/*Spec.js'
                    ],
                    vendor: [
                        'app/bower_components/angular/angular.js',
                        'app/bower_components/angular-mocks/angular-mocks.js',
                        'app/bower_components/angular-resource/angular-resource.js',
                        'app/bower_components/angular-route/angular-route.js'
                    ]
                }
            }
        }
    });

    /**
     * Load tasks from Node Package Manager
     */
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-jasmine');

    /**
     * Combine some other tasks into one task
     */
    grunt.registerTask('test', [
        'jshint',
        'jasmine'
    ]);
    grunt.registerTask('default', [
        'jshint',
        'concat',
        'uglify'
    ]);
};
