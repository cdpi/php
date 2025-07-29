<?php

namespace CDPI;

/**
 * <h1>Server</h1>
 * 
 * @version 0.1.0
 * @since 0.1.0
 */
trait Server
	{
	/**
	 * @since 0.1.0
	 */
	public function getAccept():string
		{
		return $this->getValue('HTTP_ACCEPT', '');
		}

	/**
	 * @since 0.1.0
	 */
	public function getAcceptEncoding():string
		{
		return $this->getValue('HTTP_ACCEPT_ENCODING', '');
		}

	/**
	 * @since 0.1.0
	 */
	public function getAcceptLanguage():string
		{
		return $this->getValue('HTTP_ACCEPT_LANGUAGE', '');
		}

	/**
	 * @since 0.1.0
	 */
	public function getDocumentRoot():string|null
		{
		return $this->getValue('DOCUMENT_ROOT');
		}

	/**
	 * @since 0.1.0
	 */
	public function getPathInfo():string|null
		{
		return $this->getValue('PATH_INFO');
		}

	/**
	 * @since 0.1.0
	 */
	public function getQueryString():string|null
		{
		return $this->getValue('QUERY_STRING');
		}

	/**
	 * @since 0.1.0
	 */
	public function getRequestMethod():string|null
		{
		return $this->getValue('REQUEST_METHOD');
		}

	/**
	 * @since 0.1.0
	 */
	public function getRequestMicroTime():float|null
		{
		return $this->getValue('REQUEST_TIME_FLOAT');
		}

	/**
	 * @since 0.1.0
	 */
	public function getRequestTime():int|null
		{
		return $this->getValue('REQUEST_TIME');
		}

	/**
	 * @since 0.1.0
	 */
	public function getRequestDateTime(string $timezone):\DateTime|null
		{
		$mt = $this->getRequestMicroTime();

		if ($mt === null)
			{
			return null;
			}

		$date = \DateTime::createFromFormat('U.u', $mt);

		$date->setTimeZone(new \DateTimeZone($timezone));

		return $date;
		}

	/**
	 * @since 0.1.0
	 */
	public function getRequestURI():string|null
		{
		return $this->getValue('REQUEST_URI');
		}

	/**
	 * @since 0.1.0
	 */
	public function getScriptFileName():string|null
		{
		return $this->getValue('SCRIPT_FILENAME');
		}

	/**
	 * @since 0.1.0
	 */
	public function getScriptName():string|null
		{
		// Contient le nom du script courant.
		// Cela sert lorsque les pages doivent s'appeler elles-mêmes.
		// La constante __FILE__ contient le chemin complet ainsi que le nom du fichier (i.e. inclut) courant.

		return $this->getValue('SCRIPT_NAME');
		}

	/**
	 * @since 0.1.0
	 */
	public function getServerName():string|null
		{
		// Note: Sous Apache 2, UseCanonicalName = On et ServerName doivent être définis. Sinon, cette valeur reflète le nom d'hôte fourni par le client, qui peut être falsifié.
		return $this->getValue('SERVER_NAME');
		}

	/**
	 * @since 0.1.0
	 */
	public function getServerProtocol():string|null
		{
		return $this->getValue('SERVER_PROTOCOL');
		}

	/**
	 * @since 0.1.0
	 */
	public function getServerSoftware():string|null
		{
		return $this->getValue('SERVER_SOFTWARE');
		}

	/**
	 * @since 0.1.0
	 */
	private function getValue(string $key, mixed $defaultValue = null):mixed
		{
		return \array_key_exists($key, $_SERVER) ? $_SERVER[$key] : $defaultValue;
		}
	}

/*
'PHP_SELF'
    Le nom du fichier du script en cours d'exécution, par rapport à la racine web. Par exemple, $_SERVER['PHP_SELF'] dans le script situé à l'adresse http://example.com/foo/bar.php sera /foo/bar.php. La constante __FILE__ contient le chemin complet ainsi que le nom du fichier (i.e. inclus) courant. Si PHP fonctionne en ligne de commande, cette variable contient le nom du script. 

'GATEWAY_INTERFACE'
    Numéro de révision de l'interface CGI du serveur. Par exemple 'CGI/1.1'. 
'SERVER_ADDR'
    L'adresse IP du serveur sous lequel le script courant est en train d'être exécuté. 


	'REQUEST_TIME'
    Le temps Unix du début de la requête. 
'REQUEST_TIME_FLOAT'
    Le timestamp du début de la requête, avec une précision à la microseconde. 

'HTTPS'
    Défini à une valeur non-vide si le script a été appelé via le protocole HTTPS. 

'REMOTE_USER'
    L'utilisateur authentifié. 
'REDIRECT_REMOTE_USER'
    L'utilisateur authentifié si la requête a été redirigée en interne. 

'SERVER_ADMIN'
    La valeur donnée à la directive SERVER_ADMIN (pour Apache), dans le fichier de configuration. Si le script est exécuté par un hôte virtuel, ce sera la valeur définie par l'hôte virtuel. 
'SERVER_PORT'
    Le port de la machine serveur utilisé pour les communications. Par défaut, c'est '80'. En utilisant SSL, par exemple, il sera remplacé par le numéro de port HTTP sécurisé.

        Note: Sous Apache 2, UseCanonicalName = On, ainsi que UseCanonicalPhysicalPort = On doivent être définis pour obtenir le port physique réel, sinon cette valeur peut être falsifiée et elle peut ou non retourner la valeur du port physique. 

'SERVER_SIGNATURE'
    Chaîne contenant le numéro de version du serveur et le nom d'hôte virtuel, qui sont ajoutés aux pages générées par le serveur, si cette option est activée. 
'PATH_TRANSLATED'
    Chemin dans le système de fichiers (pas le document-root) jusqu'au script courant, une fois que le serveur a fait une traduction chemin virtuel -> réel.

        Note: Les utilisateurs d'Apache 2 devraient utiliser AcceptPathInfo = On dans leur httpd.conf pour définir PATH_INFO. 

'PHP_AUTH_DIGEST'
    Lorsque vous utilisez l'authentification HTTP Digest, cette variable est définie dans l'en-tête "Authorization" envoyé par le client (que vous devez donc utiliser pour réaliser la validation appropriée). 
'PHP_AUTH_USER'
    Lorsque vous utilisez l'authentification HTTP, cette variable est définie à l'utilisateur fourni par l'utilisateur. 
'PHP_AUTH_PW'
    Lorsque vous utilisez l'authentification HTTP, cette variable est définie au mot de passe fourni par l'utilisateur. 
'AUTH_TYPE'
    Lorsque vous utilisez l'authentification HTTP, cette variable est définie au type d'identification. 

'ORIG_PATH_INFO'
    Version originale de 'PATH_INFO' avant d'être analysée par PHP.
*/

// echo $_SERVER['HTTP_USER_AGENT'] . "\n"; Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:136.0) Gecko/20100101 Firefox/136.0

// echo $_SERVER['REQUEST_URI'] . "\n"; /
// echo $_SERVER['REQUEST_METHOD'] . "\n"; GET

// echo $_SERVER['SCRIPT_NAME'] . "\n"; /index.php
// echo $_SERVER['PHP_SELF'] . "\n"; /index.php
// echo $_SERVER['SCRIPT_FILENAME'] . "\n"; /home/thefab/Documents/Projets/Satellite/www/index.php

// echo $_SERVER['DOCUMENT_ROOT'] . "\n"; /home/thefab/Documents/Projets/Satellite/www

// echo $_SERVER['SERVER_NAME'] . "\n"; localhost
// echo $_SERVER['SERVER_PORT'] . "\n"; 8000
// echo $_SERVER['SERVER_PROTOCOL'] . "\n"; HTTP/1.1

// echo $_SERVER['HTTP_ACCEPT'] . "\n";  text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
// echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "\n"; fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3
// echo $_SERVER['HTTP_ACCEPT_ENCODING'] . "\n"; gzip, deflate, br, zstd

// echo $_SERVER['HTTP_CONNECTION'] . "\n"; keep-alive
// echo $_SERVER['HTTP_HOST'] . "\n"; localhost:8000
// echo $_SERVER['HTTP_REFERER'] . "\n";
