module.exports = function (grunt) {

  //Project configuration.
  grunt.initConfig({

    //watch
    watch: {
      css: {
        files: ['sass/*.scss', 'sass/**/*.scss' , 'sass/**/**/*.scss'],
        tasks: ['sass']
      },
      html: {
        files: ['*.html'],
        task: ['watchTask']
      },
      js: {
        files: ['js/*.js']
      },
      bake: {
                files: ['app/**/*.html'],
                tasks: ['bake']
            }
    },
    //bake
      bake: {
            build: {
                files: {
                    "index.html": "app/index.html",
                    "aboutus.html" : "app/aboutus.html",
                    "tween.html" : "app/tween.html"
                }
            }
        },

    //sass
    sass: {
      build: {
        options: {
          sourcemap: 'none'
        },
        files: [{
          expand: true,
          cwd: 'sass/',
          src: ['*.scss'],
          dest: 'css/',
          ext: '.css'
        }]
      }
    },

    //browserSync
    browserSync: {
      dev: {
        bsFiles: {
          src: [
            'css/*.css',
            '*.html',
            'js/*.js'
          ]
        },
        options: {
          watchTask: true,
          server: {
            baseDir: './',
            index: 'index.html'
          }
        }
      }
    }
  });

  //Load the plugin that provides the "uglify" task.
  // grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-bake');


  // Default task(s).
  grunt.registerTask('default', ['browserSync' ,'watch' , 'bake']);
  // grunt.registerTask('default', ['uglify']);

};