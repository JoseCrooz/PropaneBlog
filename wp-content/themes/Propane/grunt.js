/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    concat: {
      dist: {
        src: ['js/propane.js', 'js/propane/*.js', 'js/init.js'],
        dest: 'js/main.js' //Build into app
      }
    },

    min: {
      build: {
        src: ['js/main.js'], //Take from app & minify
        dest: 'build/assets/js/main.min.js'
      }
    },

    watch: {
      compass: {
        files: ['scss/**/*.scss'],
        tasks: ['compass:app']
      },
      concat: {
        files: ['js/**/*.js'],
        tasks: ['concat:dist']
      }
    },

    compass: {
      app: {
        src: 'scss',
        dest: '',
        outputstyle: 'expanded',
        linecomments: false
      },
      build: {
        src: 'ascss',
        dest: 'build/assets/css',
        outputstyle: 'compressed',
        linecomments: false,
        forcecompile: true
      }
    }
    
  });

  // Default task. Prepare for deploy. Use before commit.
  grunt.registerTask('default', 'watch compass:build compass:app concat:dist');

  // plugin tasks
  grunt.loadNpmTasks('grunt-compass');
  grunt.loadNpmTasks('grunt-yui-compressor');
  

};