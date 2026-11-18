import os
import glob

def recolor_pacman():
    dist_dir = os.path.join(os.path.dirname(__file__), '..', 'dist')
    dist_dir = os.path.abspath(dist_dir)
    if not os.path.exists(dist_dir):
        print(f"Directory not found: {dist_dir}")
        return

    pacman_map = {
        '#0e4429': '#452636',  # Level 1: dusk mauve / wine
        '#006d32': '#9e5246',  # Level 2: terracotta / dusk rose
        '#26a641': '#da8a4d',  # Level 3: sunset amber
        '#39d353': '#e8be89'   # Level 4: golden cream
    }

    svg_files = glob.glob(os.path.join(dist_dir, '*pacman*.svg'))
    print(f"Found {len(svg_files)} pacman SVG files in {dist_dir}")

    for svg_file in svg_files:
        with open(svg_file, 'r', encoding='utf-8') as f:
            content = f.read()

        for g, s in pacman_map.items():
            content = content.replace(g, s)
            content = content.replace(g.upper(), s)

        with open(svg_file, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Recolored {svg_file}")

if __name__ == '__main__':
    recolor_pacman()
