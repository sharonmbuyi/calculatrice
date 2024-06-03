<?php
 class FootballTeam {
    private string $name; 
    private int $player; 
    private string $managerName; 
    private string $coachName; 
    private string $createTeam;
    public function __construct( $name, $playerCount, $managerName, $coachName, $createTeamDate) {
        $this->name = $name;
        $this->playerCount = $playerCount;
        $this->managerName = $managerName;
        $this->coachName = $coachName;
        $this->createTeamDate = $createTeamDate;
    }
        public function getName(): string {
            return $this->name;
        }
        public function getPlayerCount(): string {
            return $this->name;
        } 
        public function getManagerName(): string {
            return $this->name;
        }
         public function coachName(): string {
            return $this->name;
        }
         public function getCreateTeamDate(): string {
            return $this->name;
        }
    

 };

