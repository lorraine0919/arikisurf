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
                   "about.html" : "app/about.html",
                   "article.html" : "app/article.html",
                   "article_1.html" : "app/article_1.html",
                    "index.html": "app/index.html",
                    "surfShop.html":"app/surfShop.html",
                    "cart.html":"app/cart.html",
                    "customize.html":"app/customize.html",
                    "news.html":"app/news.html",
                    "map.html":"app/map.html",
                    "map_forum":"app/map_forum.html",
                    "map_forum_discussion":"app/map_forum_discussion.html",
                    "7member.html":"app/7member.html",
                    "7member_login.html":"app/7member_login.html",
                    "7member_register.html":"app/7member_register.html",
                    "9backstage_welcome.html":"app/9backstage_welcome.html"
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
          cwd: 'sass',
          src: ['*.scss'],
          dest: 'css',
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
            index: 'article_1.html'
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