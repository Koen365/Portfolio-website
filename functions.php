<?php
function getProjects(): array {
  return [
    [
      "title"    => "🌍 GameWorldKoen",
      "desc"     => "Een webproject waarin ik een game-website met categorieën, detailpagina’s en een strakke UI heb gebouwd.",
      "link"     => "http://localhost/GameWorldKoen/index.php",
      "repo"     => "",
      "image"    => "images/test.png",
      "category" => "web",
      "tags"     => ["PHP", "Bootstrap", "MySQL"]
    ],
    [
      "title"    => "📻 RadioKoen",
      "desc"     => "Streaming radio met een eenvoudige player, programmagids en favorieten.",
      "link"     => "http://localhost/RadioKoen/index.php",
      "repo"     => "",
      "image"    => "https://images.unsplash.com/photo-1484704849700-f032a568e944?q=80&w=1200&auto=format&fit=crop",
      "category" => "web",
      "tags"     => ["HTML", "CSS", "JS"]
    ],
    [
      "title"    => "C# Game Project",
      "desc"     => "Kleine 2D game met collision, scoring en menu’s. Focus op OOP en game-loop.",
      "link"     => "#",
      "repo"     => "",
      "image"    => "https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1200&auto=format&fit=crop",
      "category" => "software",
      "tags"     => ["C#", "OOP"]
    ],
  ];
}
