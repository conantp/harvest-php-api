<?php

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteTaskAssignment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    protected $projectId;
    protected $taskAssignmentId;
    /**
     * Delete a task assignment. Deleting a task assignment is only possible if it has no time entries associated with it. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $projectId 
     * @param string $taskAssignmentId 
     */
    public function __construct(string $projectId, string $taskAssignmentId)
    {
        $this->projectId = $projectId;
        $this->taskAssignmentId = $taskAssignmentId;
    }
    use \Jane\OpenApiRuntime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{projectId}', '{taskAssignmentId}'), array($this->projectId, $this->taskAssignmentId), '/projects/{projectId}/task_assignments/{taskAssignmentId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}