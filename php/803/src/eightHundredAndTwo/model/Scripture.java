package eightHundredAndTwo.model;

public class Scripture {

private String comment;
private int chapter;
private int verse;

public Scripture(){
    setcomment("");
    setChapter(1);
    setVerse(1);
}

public Scripture(String comment, int chapter, int verse) {
    this.setcomment(comment);
    this.setChapter(chapter);
    this.setVerse(verse);
}

public String getcomment() {
return comment;
}

public void setcomment(String comment) {
    this.comment = comment;
}

public int getChapter() {
    return chapter;
}

public void setChapter(int chapter) {
    this.chapter = chapter;
}

public int getVerse() {
    return verse;
}

public void setVerse(int verse) {
    this.verse = verse;
}

public String toFileString() {
    return comment + "," + chapter + "," + verse;
}


public void loadFromFileString(String str) {
    // TODO: Validation should be done here
    String[] parts = str.split(",");


    comment = parts[0];
    chapter = Integer.parseInt(parts[1]);
    verse = Integer.parseInt(parts[2]);
}

@Override
public String toString() {
       return comment + " " + chapter + ":" + verse;
}

}