<?php

echo "Enter remote path (format protocol://username:password@host:port) : ";
$remote = stream_get_line(STDIN, 1024, PHP_EOL);
exec('stty echo');

return [
	'nette' => [
		'remote' => $remote,
		'local' => '.',
		'test' => false,
		'ignore' => '
            /deployment*
            !deployment.log
            /log/*
            !log/.htaccess
            temp/*
            !temp/.htaccess
            */tests
            db
            phinx*
            .htdeployment*
            .idea
            .git*
            /mariadb
		',
		'allowDelete' => true,
		'before' => [
			function (Deployment\Server $server, Deployment\Logger $logger, Deployment\Deployer $deployer) {
				$logger->log('Hello!');
			},
		],
		'afterUpload' => [],
		'after' => [],
		'purge' => [
			'temp/cache',
		],
		'preprocess' => false,
	],

	'tempDir' => __DIR__ . '/temp',
	'colors' => true,
];
