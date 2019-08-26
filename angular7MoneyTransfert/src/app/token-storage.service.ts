import { Injectable } from '@angular/core';
// les clés des informations à stocker dans le sessionstorage
const TOKEN_KEY = 'AuthToken';
const USERNAME_KEY = 'AuthUsername';
const AUTHORITIES_KEY = 'AuthAuthorities';

@Injectable({
  providedIn: 'root'
})
export class TokenStorageService {
  // tableau qui stoque les roles 
  private roles: Array<string> = [];
  constructor() { }


  signOut() {
    // pour vider le sessionstorage qui se deconnecte
    window.sessionStorage.clear();
  }
  public saveToken(token: string) {
    // mettre le token dans sessionstorage
    window.sessionStorage.removeItem(TOKEN_KEY);
    window.sessionStorage.setItem(TOKEN_KEY, token);
  }

  public getToken(): string {
    //recuperation du token
    return sessionStorage.getItem(TOKEN_KEY);
  }

  public saveUsername(username: string) {
    // mettre le username dans sessionstorage
    window.sessionStorage.removeItem(USERNAME_KEY);
    window.sessionStorage.setItem(USERNAME_KEY, username);
  }

  public getUsername(): string {
    //recuperation du username
    return sessionStorage.getItem(USERNAME_KEY);
  }

  public saveAuthorities(authorities: string[]) {
    // mettre les roles dans sessionstorage
    window.sessionStorage.removeItem(AUTHORITIES_KEY);
    window.sessionStorage.setItem(AUTHORITIES_KEY, JSON.stringify(authorities));
  }

  public getAuthorities(): string[] {
    //recuperation des roles
    this.roles = [];

    if (sessionStorage.getItem(TOKEN_KEY)) {
      JSON.parse(sessionStorage.getItem(AUTHORITIES_KEY)).forEach(authority => {
        this.roles.push(authority.authority);
      });
    }

    return this.roles;
  }
}
