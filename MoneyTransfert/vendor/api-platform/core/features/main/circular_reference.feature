<<<<<<< HEAD
Feature: Circular references handling
  In order to handle circular references
  As a developer
  I should be able to catch circular references.

  @createSchema
  Scenario: Create a circular reference
    When I add "Content-Type" header equal to "application/ld+json"
    And I send a "POST" request to "/circular_references" with body:
    """
    {}
    """
    And I add "Content-Type" header equal to "application/ld+json"
    And I send a "PUT" request to "/circular_references/1" with body:
    """
    {
      "parent": "/circular_references/1"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context": "/contexts/CircularReference",
      "@id": "/circular_references/1",
      "@type": "CircularReference",
      "parent": "/circular_references/1",
      "children": [
        "/circular_references/1"
      ]
    }
    """

  Scenario: Fetch circular reference
    When I add "Content-Type" header equal to "application/ld+json"
    And I send a "POST" request to "/circular_references" with body:
    """
    {}
    """
    And I add "Content-Type" header equal to "application/ld+json"
    And I send a "PUT" request to "/circular_references/2" with body:
    """
    {
      "parent": "/circular_references/1"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context": "/contexts/CircularReference",
      "@id": "/circular_references/2",
      "@type": "CircularReference",
      "parent": {
          "@id": "/circular_references/1",
          "@type": "CircularReference",
          "parent": "/circular_references/1",
          "children": [
              "/circular_references/1",
              "/circular_references/2"
          ]
      },
      "children": []
    }
    """
    And I send a "GET" request to "/circular_references/1"
    Then the response status code should be 200
    And the JSON should be equal to:
    """
    {
        "@context": "/contexts/CircularReference",
        "@id": "/circular_references/1",
        "@type": "CircularReference",
        "parent": "/circular_references/1",
        "children": [
            "/circular_references/1",
            {
                "@id": "/circular_references/2",
                "@type": "CircularReference",
                "parent": "/circular_references/1",
                "children": []
            }
        ]
    }
    """
=======
Feature: Circular references handling
  In order to handle circular references
  As a developer
  I should be able to catch circular references.

  @createSchema
  Scenario: Create a circular reference
    When I add "Content-Type" header equal to "application/ld+json"
    And I send a "POST" request to "/circular_references" with body:
    """
    {}
    """
    And I add "Content-Type" header equal to "application/ld+json"
    And I send a "PUT" request to "/circular_references/1" with body:
    """
    {
      "parent": "/circular_references/1"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context": "/contexts/CircularReference",
      "@id": "/circular_references/1",
      "@type": "CircularReference",
      "parent": "/circular_references/1",
      "children": [
        "/circular_references/1"
      ]
    }
    """

  Scenario: Fetch circular reference
    When I add "Content-Type" header equal to "application/ld+json"
    And I send a "POST" request to "/circular_references" with body:
    """
    {}
    """
    And I add "Content-Type" header equal to "application/ld+json"
    And I send a "PUT" request to "/circular_references/2" with body:
    """
    {
      "parent": "/circular_references/1"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the header "Content-Type" should be equal to "application/ld+json; charset=utf-8"
    And the JSON should be equal to:
    """
    {
      "@context": "/contexts/CircularReference",
      "@id": "/circular_references/2",
      "@type": "CircularReference",
      "parent": {
          "@id": "/circular_references/1",
          "@type": "CircularReference",
          "parent": "/circular_references/1",
          "children": [
              "/circular_references/1",
              "/circular_references/2"
          ]
      },
      "children": []
    }
    """
    And I send a "GET" request to "/circular_references/1"
    Then the response status code should be 200
    And the JSON should be equal to:
    """
    {
        "@context": "/contexts/CircularReference",
        "@id": "/circular_references/1",
        "@type": "CircularReference",
        "parent": "/circular_references/1",
        "children": [
            "/circular_references/1",
            {
                "@id": "/circular_references/2",
                "@type": "CircularReference",
                "parent": "/circular_references/1",
                "children": []
            }
        ]
    }
    """
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
