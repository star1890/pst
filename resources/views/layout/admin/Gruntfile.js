'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/backend/js/*.js',
        'assets/!backend/js/scripts.min.js'
      ]
    },
    sass: {
      dist: {
        options: {
          style: 'compressed',
          compass: true,
          sourcemap: false
        },
        files: {
          'assets/backend/css/main.min.css': [
            'sass/main.scss'
          ],
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'assets/backend/js/scripts.min.js': [
            'assets/backend/js/_*.js'
          ]
        },
        options: {
          // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          // sourceMap: 'assets/js/scripts.min.js.map',
          // sourceMappingURL: '/app/themes/roots/assets/js/scripts.min.js.map'
        }
      }
    },
    watch: {
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['uglify']
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: false
        },
        files: [
          'assets/backend/css/main.min.css',
          'assets/backend/js/scripts.min.js'
        ]
      },
      sass: {
        files: [
          'sass/*.scss',
          'sass/base/*.scss',
          'sass/helpers/*.scss',
          'sass/layout/*.scss',
          'sass/pages/*.scss',
          'sass/vendors/*.scss',
        ],
        tasks: ['sass']
      }
    },
    clean: {
      dist: [
        'assets/backend/css/main.min.css',
        'assets/backend/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'sass',
    'uglify'
  ]);
  grunt.registerTask('dev', [
    'watch'
  ]);

};
