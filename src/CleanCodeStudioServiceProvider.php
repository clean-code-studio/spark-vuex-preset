<?php

namespace CleanCodeStudio\SparkVuexPreset; 

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Commands\ScaffoldVuexForLaravelSpark;
class CleanCodeStudioServiceProvider extends ServiceProvider
{
	 public function boot()
	 {

	 	    if ($this->app->runningInConsole()) {
	        $this->commands([
  	          ScaffoldVuexForLaravelSpark::class,
    	    ]);
    		}
		 		
		 		PresetCommand::macro('clean:spark-vuex', function ($command) {
			
						SparkVuexPreset::install();

            $command->info('Complete! Re-compile your assets to start using vuex with Spark!');
	 		});
	 }
}