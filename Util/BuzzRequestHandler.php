<?php
/**
 * Siphoc
 *
 * @author      Jelmer Snoeck <jelmer@siphoc.com>
 * @copyright   2013 Siphoc
 * @link        http://siphoc.com
 */

namespace Siphoc\PdfBundle\Util;

use Buzz\Client\BuzzClientInterface;
use Psr\Http\Client\ClientException;
use Buzz\Client\FileGetContents;
use Nyholm\Psr7\Request as PSR7Request;

/**
 * The handler that we'll use to get external files from other servers.
 *
 * @author Jelmer Snoeck <jelmer@siphoc.com>
 */
class BuzzRequestHandler implements RequestHandlerInterface
{
    /**
     * The client object we'll be using to do our actuall calls.
     *
     * @var BuzzClientInterface
     */
    protected $client;

    /**
     * Initiate the Request handler with a Request, Response and Client
     * interface.
     *
     * @param BuzzClientInterface  $client
     */
    public function __construct(BuzzClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Fetch the Client object we're using to do requests.
     *
     * @return BuzzClientInterface
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Retrieve the contents from a given url.
     *
     * @param  string $url
     * @return string
     * @throws ClientException
     */
    public function getContent($url)
    {
        $request = new PSR7Request('GET', $url);

        $client = new FileGetContents();
        $response = $client->sendRequest($request, ['timeout' => 4]);
        return $response->getBody();
    }
}
