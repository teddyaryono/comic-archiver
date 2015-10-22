<?php 

// $pwd = '/home/teddyaryono/Documents/comics/Doraemon/';
// working directory in arguments, must be a full-path with trailing slash
$pwd = $argv[1];

// Get OS (Linux/Win)
$os = PHP_OS;

// If your OS is linux
if($os == 'Linux') {
	
	// Add trailing slash if it is missing
	if(substr($pwd, count($pwd), 1) !== '/'){
		$pwd .= '/';
	}
	
	// scan any directory inside working directory
	$dirs = scandir($pwd);
	
	// check the result of current working directory
	// print_r($dirs);
	
	
	// Archiving
	for($i=2; $i<count($dirs); $i++){
		
		// The command to archive any directory inside your current working directory
		$cmd = 'zip -r "' . $pwd . $dirs[$i] . '.zip"' . ' "' . $pwd . $dirs[$i] . '"';
		
		// Run the archive process
		echo shell_exec($cmd);
	}
	// Archiving process is done
	echo "Archiving complete.\n";
	
	
	// Renaming to *.cbz
	for($i=2; $i<count($dirs); $i++){
		
		// The command to rename any zip file to cbz inside your current working directory
		$cmd = 'mv "' . $pwd . $dirs[$i] . '.zip"' . ' "' . $pwd . $dirs[$i] . '.cbz"';
		
		// Run the bulk renaming process
		echo shell_exec($cmd);
	}
	// Renaming process is done
	echo "Renaming complete.\n";
	
} else {
	
	echo "Your OS does not support this tool. Please, use Linux or Mac OS.\n";
	
}